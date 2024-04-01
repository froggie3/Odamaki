export class TOCElementHandler {
    constructor(TOC) {
        this.e = TOC;
    }

    px(v) {
        return `${v}px`;
    }

    __getStyle() {
        const style = this.e.style;
        return {
            position: style.position,
            left: style.left,
            top: style.top,
        };
    }

    setStyle({ position = "relative", left = null, top = null } = {}) {
        const style = this.e.style;
        style.position = position;
        style.left = left !== null ? this.px(left) : "";
        style.top = top !== null ? this.px(top) : "";

        // console.debug(this.__getStyle());
    }

    /**
     * Whether the TOC is on a default position
     * @returns bool
     */
    isDefault() {
        const style = this.e.style;
        return (
            style.position === "relative" &&
            style.left === "" &&
            style.top === ""
        );
    }

    /**
     * Whether the TOC is fixed position
     * @returns bool
     */
    isFixed() {
        const style = this.e.style;
        return style.position === "fixed";
    }

    /**
     * Whether the TOC is absolute position
     * @returns bool
     */
    isAbsolute() {
        return !this.isDefault() && !this.isFixed();
    }
}
