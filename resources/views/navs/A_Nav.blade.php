<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

$profile = DB::table('users')
    ->where('users.id', '=', Auth::user()->id)
    ->join('user_info', 'user_info.user_ID', "=", 'users.id')
    ->select('user_info.profile_pic')
    ->first();
?>

<div class="sidebar close">

    {{-- Linus Logo Header --}}
    <div class="logo-details mt-4">
        <a href="/"> <i><img src="{{ URL::asset('img/Logo_linus_white.png') }}"></i></a>
    </div>


    {{-- Remove this comment if ever you decide to have a text and logo
        as the sidebar header

        <div class="logo-details">
        <i class='bx bx-menu'></i>
        <span class="logo_name">Linus</span>
    </div> --}}
    <br>

    <ul class="nav-links">
        <!--All Accounts-->
        <li>
            <a href="{{ route('adminDashboard') }}">
                <i class='bx bx-group'></i>
                <span class="link_name">All Users</span>
            </a>
            <ul class="sub-menu">
                <li><a class="link_name" href="{{ route('adminDashboard') }}">All Users</a>
                </li>
            </ul>
        </li>
        <!--end of All Acounts Bar-->

        <!--Admins-->
        <li>
            <a href="{{ route('adminAccounts') }}">
                <i class='bx bx-user'></i>
                <span class="link_name">Administrator</span>
            </a>
            <ul class="sub-menu">
                <li><a class="link_name" href="{{ route('adminAccounts') }}">Administrator</a>
                </li>
            </ul>
        </li>
        <!--end of Admins Bar-->

        <!--Faculty-->
        <li>
            <a href="{{ route('adminFacultyAccounts') }}">
                <i class='bx bx-pencil'></i>
                <span class="link_name">Faculty & Staff</span>
            </a>
            <ul class="sub-menu">
                <li><a class="link_name" href="{{ route('adminFacultyAccounts') }}">Faculty & Staff</a>
                </li>
            </ul>
        </li>
        <!--end of Faculty Bar-->

        <!--Student-->
        <li>
            <a href="{{ route('adminStudentAccounts') }}">
                <i class='bx bx-test-tube'></i>
                <span class="link_name">Student</span>
            </a>
            <ul class="sub-menu">
                <li><a class="link_name" href="{{ route('adminStudentAccounts') }}">Student</a>
                </li>
            </ul>
        </li>
        <!--end of Student-->
        <!--Profile-->
        <li>
            <div class="profile-details">
                <div class="profile-content"> <img src="{{ asset($profile->profile_pic) }}" alt="profile">
                </div>
                <div class="name-job">
                    <a href="{{ route('Aprofile') }}">
                        <div class="profile_name">{{ Auth::user()->name }}
                        </div> <!-- call Name -->
                    </a>
                    <div class="job">{{ Auth::user()->user_type }}</div><!-- user type -->
                </div>
                <!-- Authentication for LogOut-->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
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