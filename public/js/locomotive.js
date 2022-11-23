

window.addEventListener("load", () => {
  const scroll = new LocomotiveScroll({
    el: document.querySelector("[data-scroll-container]"),
    smooth: true,
    scrollFromAnywhere: true,
  });
});
setTimeout(() => {
  scroll.update();
}, 5000);