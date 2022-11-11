<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IEMSWebsite extends Controller
{
    function accessHome(){
        return view('IEMS.home');
    }

    function accessCollege(){
        return view('IEMS.college');
    }

    function accessEnrollment(){
        return view('IEMS.coursesenrollment');
    }

    function accessFacilities(){
        return view('IEMS.facilities');
    }

    function accessFacultyStaff(){
        return view('IEMS.facultystaff');
    }

    function accessLinus(){
        return view('IEMS.linus');
    }

    function accessRates(){
        return view('IEMS.rates');
    }

    function accessAnnouncement(){
        return view('IEMS.SITE.announcement');
    }

    function accessAnnouncementDisplay(){
        return view('IEMS.SITE.announcement_display');
    }

}
