<div class="sidebar close">

    {{-- Linus Logo Header --}}
    <div class="logo-details">
        <i class="mt-4"><img src="{{ URL::asset('img/Logo_linus_white.png') }}"></i>
    </div>


    {{-- Remove this comment if ever you decide to have a text and logo
        as the sidebar header

        <div class="logo-details">
        <i class='bx bx-menu'></i>
        <span class="logo_name">Linus</span>
    </div> --}}

    <br>

      <ul class="nav-links">

         <!--Wildlife-->
        <li>
          <a href="{{ route('studentDashboard') }}">
            <i class='bx bx-leaf' ></i>
            <span class="link_name">Wildlife</span>
          </a>
            <ul class="sub-menu">
              <li><a class="link_name" href="{{ route('studentDashboard') }}">Wildlife</a>
              </li>
            </ul>
        </li> <!--end of wildlife Bar-->

            <!--Museum-->
            <li>
            <div class="iocn-link">
              <a href="{{ route('S_boneCollection') }}">
                <i class='bx bx-library' ></i>
                <span class="link_name">Museum</span>
              </a>
              <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="{{ route('S_boneCollection') }}">Museum</a></li>
              <li><a href="{{ route('S_boneCollection') }}">Bones</a></li>
              <li><a href="{{ route('S_refCollection') }}">References</a></li>
            </ul>
      </li>
      <!--end of Museum Bar-->

       <!--Thesis-->
        <li>
            <div class="iocn-link">
              <a href="{{ route('Student_thesis') }}">
                <i class='bx bx-book' ></i>
                <span class="link_name">Thesis Papers</span>
              </a>
              <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="{{ route('Student_thesis') }}">Thesis Papers</a></li>
              <li><a href="{{ route('S_gradThesis') }}">PostGraduate</a></li>
              <li><a href="{{ route('S_undergradThesis') }}">UnderGraduate</a></li>
            </ul>
      </li>
      <!--end of Thesis Paper-->

         <!--Journal-->
        <li>
          <a href="{{ route('Student_journal') }}">
            <i class='bx bx-news' ></i>
            <span class="link_name">Journal Articles</span>
          </a>
            <ul class="sub-menu">
              <li><a class="link_name" href="{{ route('Student_journal') }}"> Journal Articles</a></li>
            </ul>
        </li><!--end of Journal Article-->

        <!--Request-->
        <li>
          <a href="{{ route('Student_request') }}">
            <i class='bx bx-bell' ></i>
            <span class="link_name">Request</span>
          </a>
            <ul class="sub-menu">
              <li><a class="link_name" href="{{ route('Student_request') }}">Request</a>
              </li>
            </ul>
        </li><!--end of Request-->

         <!--Profile-->
        <li>
          <div class="profile-details">
            <div class="profile-content">
                <img src="{{Auth::user()->profile_pic}}" alt="img">
            </div>
              <div class="name-job">
                <a href="{{ route('Fprofile') }}">
                  <div class="profile_name">{{ Auth::user()->name }}
                  </div> <!-- call Name -->
                </a>
                  <div class="job">{{ Auth::user()->user_type }}</div><!-- user type -->
              </div>
                <!-- Authentication for LogOut-->
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <x-dropdown-link :href="route('logout')"
                  onclick="event.preventDefault();
                  this.closest('form').submit();">
                  <i class='bx bx-log-out' ></i>
                   </x-dropdown-link>
                </form>
          </div>
        </li><!--end of Profile-->
      </ul><!--end of Nav Links-->
</div><!--end of Sidebar-->
