

window.addEventListener("load", (event) => {
    const scroller = new LocomotiveScroll({
      el: document.querySelector("[data-scroll-container]"),
      smooth: true,
      multiplier: 0.75,
      scrollFromAnywhere: true,
    });
  });
  setTimeout(() => {
    scroller.update();
  }, 5000);

