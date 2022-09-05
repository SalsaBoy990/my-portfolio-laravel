import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();


window.ready = function (handler) {
    if (
        /complete|loaded|interactive/.test(document.readyState) &&
        document.body
    ) {
        handler();
    } else {
        document.addEventListener("DOMContentLoaded", handler, false);
    }
};

window.ready(function () {
    var scrollToTopBtn = document.getElementById("scroll-to-top");
    scrollToTopBtn.addEventListener("click", function () {
        console.log(this);
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    });
});
