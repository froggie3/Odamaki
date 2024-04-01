/**
 * Parse `headers`, and create the table of contents under the `target` node.
 * @param {HTMLElement[]} headers
 * @param {HTMLElement} targets
 */
export class TreeGenerator {
    constructor(headers, target) {
        this.headers = headers;
        this.target = target;
    }

    /**
     * A function that scans h1, h2, ... hN elements, and returns the tree structure of headings.
     * @param {NodeList[]} headers an unstructured of headings.
     * @return {any[]} an array represents the tree structure of headings.
     */
    createTree(headers) {
        const root = {
            level: 0,
            index: { start: 0, end: headers.length },
            content: "",
            child: [],
        };
        let stack = [root];

        for (const [i, element] of headers.entries()) {
            let level = parseInt(element.tagName.slice(1));
            let node = {
                level: level,
                index: {
                    start: i,
                    end: headers.length,
                },
                content: element.textContent.trim(),
                child: [],
            };

            while (stack.at(-1).level >= level) {
                stack.at(-1).index.end = i;
                stack.pop();
            }

            stack.at(-1).child.push(node);
            stack.push(node);
        }

        while (stack.length > 1) {
            stack.at(-1).index.end = headers.length;
            stack.pop();
        }

        return root.child;
    }

    /**
     * An event handler that adds a table of contents under the 'parent' node.
     * @param {[]} tree an array represents the tree structure of headings.
     * @returns {HTMLOListElement}
     */
    createList(tree) {
        let ol = document.createElement("ol");
        ol.setAttribute("class", "ez-toc-list");

        for (let node of tree) {
            const loc = window.location;
            let li = document.createElement("li");
            let a = document.createElement("a");

            a.textContent = node.content;
            a.href =
                loc.origin +
                loc.pathname +
                "#" +
                encodeURIComponent(node.content);

            li.appendChild(a);
            if (node.child.length > 0) {
                li.appendChild(this.createList(node.child));
            }
            ol.appendChild(li);
        }
        return ol;
    }

    create() {
        // Set an `id` attribute based on its textContent to the `header`
        this.headers.forEach((header) => {
            const content = header.textContent.trim();
            header.setAttribute("id", encodeURIComponent(content));
        });

        const tree = this.createTree(this.headers);
        const ol = this.createList(tree);
        // console.debug(tree);
        this.target.appendChild(ol);
    }
}
