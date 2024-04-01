/**
 *
 * @param {TOCElementHandler} handler
 * @param {HTMLElement} header
 * @param {HTMLElement} footer
 */
export class TOC {
    constructor(handler, header, footer) {
        this.handler = handler;
        this.element = handler.e;
        this.header = header;
        this.footer = footer;
    }

    /**
     * Ignites on update.
     */
    __update() {
        if (typeof this.header === "undefined") {
            return;
        }

        // current scroll position is the page head
        const footerY = this.footer.getBoundingClientRect().y + window.scrollY;

        const ceilY =
            this.header.getBoundingClientRect().y + window.scrollY - 32;
        const floorY = footerY - 32 * 2;

        const currentViewY = window.scrollY;

        // console.debug(`ceilY: ${ceilY}`);
        // console.debug(`footerY: ${footerY}`);
        // console.debug(`currentViewY: ${currentViewY}`);
        // console.debug(this.toc.getBoundingClientRect())

        if (currentViewY <= ceilY) {
            // if (!this.tocHandler.isFixed()) {
            //     return;
            // }
            // console.debug("Stick to the header.");
            this.handler.setStyle({
                position: "absolute",
                left: 32,
                top: this.header.getBoundingClientRect().y + window.scrollY,
            });
        } else if (
            currentViewY + this.element.getBoundingClientRect().height + 32 >
            floorY
        ) {
            // if (!this.tocHandler.isFixed()) {
            //     return;
            // }
            // console.debug("Stick to the footer.");
            this.handler.setStyle({
                position: "absolute",
                left: 32,
                top:
                    footerY -
                    this.element.getBoundingClientRect().height -
                    32 * 2,
            });
        } else {
            // if (this.tocHandler.isFixed()) {
            //     return;
            // }
            // console.debug("Fix.");
            this.handler.setStyle({
                position: "fixed",
                left: 32,
                top: 32,
            });
        }
    }

    setDefault() {
        this.handler.setStyle({ position: "relative", left: null, top: null });
    }

    updateAny() {
        if (document.documentElement.clientWidth >= 768) {
            this.__update();
        }
    }

    updateResize() {
        console.debug("resize");
        if (document.documentElement.clientWidth >= 768) {
            this.__update();
            return;
        }

        this.setDefault();
    }
}
