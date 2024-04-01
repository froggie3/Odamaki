/**
 * Table of Content storage handler
 * @param {HTMLElement} handler
 * @param {Storage} storage
 */
export class TOCStorageHandler {
    constructor(handler, storage) {
        this.element = handler;
        this.storage = storage;
    }

    /**
     * Get and recover previous open status from stored Webstorage
     */
    recover() {
        if (+window.localStorage.getItem("tocOpened")) {
            this.element.setAttribute("open", "");
        }
    }

    /**
     * Save current open status into the Webstorage
     */
    toggle() {
        setTimeout(() => {
            const value = this.element.hasAttribute("open") ? 1 : 0;
            console.log(value);
            this.storage.setItem("tocOpened", value);
        }, 100);
    }
}