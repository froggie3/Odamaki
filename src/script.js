import { TOC } from "./lib/TOC";
import { TreeGenerator } from "./lib/TreeGenerator";
import { TOCElementHandler } from "./lib/TOCElementHandler";
import { TOCStorageHandler } from "./lib/TOCStorageHandler";


document.addEventListener("DOMContentLoaded", () => {
    const TOCElement = document.querySelector("#ez-toc-container");
    const tocTitle = document.querySelector(".ez-toc-title");

    if (!(TOCElement && tocTitle)) {
        return;
    }

    const status = new TOCStorageHandler(TOCElement, window.localStorage);

    tocTitle.addEventListener(
        "click",
        () => {
            status.toggle();
        },
        true
    );
    status.recover();
});

document.addEventListener("DOMContentLoaded", () => {
    const TOCElement = document.querySelector("#ez-toc-container");
    const header = document.querySelector("#content");
    const footer = document.querySelector(".odamaki-footer-container");
    const selector = ["h6", "h5", "h4", "h3", "h2", "h1"]
        .reverse()
        .map((e) => `.content-rules ${e}`)
        .join(", ");
    const headers = document.querySelectorAll(selector);

    document.querySelector("html").style.scrollBehavior = "smooth";

    if (!(header && footer && TOCElement)) {
        return;
    }

    const toc = new TOC(new TOCElementHandler(TOCElement), header, footer);

    document.addEventListener(
        "scroll",
        () => {
            toc.updateAny();
        },
        true
    );

    window.addEventListener(
        "resize",
        () => {
            toc.updateResize();
        },
        true
    );

    const tree = new TreeGenerator(headers, TOCElement);
    tree.create();
    toc.updateAny();
});
