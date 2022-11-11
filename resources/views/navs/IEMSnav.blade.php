<!-- Navbar  -->
<nav id="navbar"class="navbar fixed-top navbar-expand-lg navbar-light justify-content-center p-16">
    <div class="container p-6">
        {{-- IEMS Logo --}}
            <a class="navbar-brand justify-content-center mx-auto" href="/">
                <img src="{{URL::asset('img/Logo_IEMS.png')}}" alt="" width="65" height="65" class="d-inline-block align-text-top">
            </a>

        {{-- Menu Icon --}}
        <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
        </button>

        {{-- Navbar Items --}}
        <div class="collapse navbar-collapse justify-content-center mx-auto text-black" id="navbarNav">
            <ul class="navbar-nav  mb-2 mb-lg-0">
            <li class="nav-item" style="padding:5px">
                <a class="nav-link font-weight-bold " href="/linus" >Linus</a>
            </li>
            <li class="nav-item" style="padding:5px">
                <a class="nav-link font-weight-bold" href="#">Fishery</a>
            </li>
            <li class="nav-item dropdown" style="padding:5px">
                <a class="nav-link dropdown-toggle font-weight-bold text-s" data-bs-toggle="dropdown" >About</a>
                  <ul class="dropdown-menu bg-light b-0" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/college">College</a></li>
                    <li><a class="dropdown-item" href="/enrollment">Enrollment</a></li>
                    <li><a class="dropdown-item" href="/facilities">Facilities</a></li>
                    <li><a class="dropdown-item" href="/rates">Rates</a></li>
                    <li><a class="dropdown-item" href="/facultystaff">Faculty and Staff</a></li>
                  </ul>
            </li>
            <li class="nav-item" style="padding:5px">
                <a class="nav-link font-weight-bold" href="/announcement">Announcements</a>
            </li>
            <li class="nav-item" style="padding:5px">
                <a class="nav-link font-weight-bold" href="/contact-us">Contact Us</a>
            </li>
            </ul>
        </div>
    </div>
  </nav>


  <script>
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

</script>
