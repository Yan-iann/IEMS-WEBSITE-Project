
    var nav = document.querySelector('nav');
    var navlink = document.getElementsByClassName('nav a.nav-link');

window.addEventListener('scroll', function () {
  if (window.pageYOffset > 200) {
    nav.classList.add('bg-light', 'shadow');
  } else {
    nav.classList.remove('bg-light', 'shadow');
  }
});


var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-100px";
  }
  prevScrollpos = currentScrollPos;
}

