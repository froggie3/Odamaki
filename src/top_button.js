export function initTopButton() {
    const content = document.querySelector("#content");
    const headerButton = document.querySelector("#toHead");
    var contentY = content.getBoundingClientRect().y + window.scrollY;

    headerButton.addEventListener(
        "click",
        () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        },
        true
    );

    document.addEventListener(
        "scroll",
        () => {
            contentY = content.getBoundingClientRect().y + window.scrollY;
            if (window.scrollY >= contentY) {
                headerButton.style.visibility = "visible";
            } else {
                headerButton.style.visibility = "hidden";
            }
        },
        true
    );
}

document.addEventListener("DOMContentLoaded", () => {
    initTopButton();
});
