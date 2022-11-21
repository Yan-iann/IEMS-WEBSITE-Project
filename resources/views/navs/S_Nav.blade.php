<div class="sidebar close">

    {{-- Linus Logo Header --}}
    <div class="logo-details mt-4">
        <a href="/"> <i><img src="{{ URL::asset('img/Logo_linus_white.png') }}"></i> </a>
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
                <i class='bx bx-radar'></i>
                <span class="link_name">Critters</span>
            </a>
            <ul class="sub-menu">
                <li><a class="link_name" href="{{ route('studentDashboard') }}">Critters</a>
                </li>
            </ul>
        </li>
        <!--end of wildlife Bar-->

        <!--Museum-->
        <li>
            <div class="iocn-link">
                <a href="{{ route('S_boneCollection') }}">
                    <i class='bx bx-library'></i>
                    <span class="link_name">Museum</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li>>Museum</li>
                <li><a href="{{ route('S_boneCollection') }}">Whale Bone</a></li>
                <li><a href="{{ route('S_refCollection') }}">References</a></li>
            </ul>
        </li>
        <!--end of Museum Bar-->

        <!--Thesis-->
        <li>
            <div class="iocn-link">
                <a href="{{ route('Student_thesis') }}">
                    <i class='bx bx-book'></i>
                    <span class="link_name">Thesis Papers</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li>Thesis Papers</li>
                <li><a href="{{ route('S_gradThesis') }}">Graduate</a></li>
                <li><a href="{{ route('S_undergradThesis') }}">Undergraduate</a></li>
            </ul>
        </li>
        <!--end of Thesis Paper-->

        <!--Journal-->
        <li>
            <a href="{{ route('Student_journal') }}">
                <i class='bx bx-news'></i>
                <span class="link_name">Journal Articles</span>
            </a>
            <ul class="sub-menu">
                <li><a class="link_name" href="{{ route('Student_journal') }}"> Journal Articles</a></li>
            </ul>
        </li>
        <!--end of Journal Article-->

        <!--Request-->
        <li>
            <a href="{{ route('Student_request') }}">
                <i class='bx bx-bell'></i>
                <span class="link_name">Request</span>
            </a>
            <ul class="sub-menu">
                <li><a class="link_name" href="{{ route('Student_request') }}">Request</a>
                </li>
            </ul>
        </li>
        <!--end of Request-->

        <!--Profile-->
        <li>
            <div class="profile-details">
                <div class="profile-content">
                    <a href="{{ route('Sprofile') }}">
                        <img src="{{ Auth::user()->profile_pic }}">
                    </a>
                </div>
                <div class="name-job">
                    <a href="{{ route('Sprofile') }}">
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
                        <i class='bx bx-log-out'></i>
                    </x-dropdown-link>
                </form>
            </div>
        </li>
        <!--end of Profile-->
    </ul>
    <!--end of Nav Links-->
</div>
<!--end of Sidebar-->
