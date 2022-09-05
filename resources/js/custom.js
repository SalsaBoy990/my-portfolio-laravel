function ready(handler) {
  if (/complete|loaded|interactive/.test(document.readyState) && document.body) {
    handler();
  } else {
    document.addEventListener("DOMContentLoaded", handler, false);
  }
};

ready(function () {
    var scrollToTopBtn = document.getElementById("scroll-to-top");
    scrollToTopBtn.addEventListener('click', function () {
        scrollTo(document.body, 0, 700);
    });
}