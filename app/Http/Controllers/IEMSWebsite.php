<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\user_info;
use App\Models\User;
use App\Models\wildlife;
use App\Models\thesis_paper;
use App\Models\journal_article;
use App\Models\announcement;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Redirect; 
use DB;

class IEMSWebsite extends Controller
{
    function accessHome(){
        $anno = announcement::orderBy('anno_ID','Desc')->get();
        //$anno = announcement::all();
        return view('IEMS\Linus.SITE.home')->with('announcement',$anno);
    }

    function accessCollege(){
        return view('IEMS\Linus.SITE.college');
    }

    function accessEnrollment(){
        return view('IEMS\Linus.SITE.coursesenrollment');
    }

    function accessFacilities(){
        return view('IEMS\Linus.SITE.facilities');
    }

    function accessFacultyStaff(){
        return view('IEMS\Linus.SITE.facultystaff');
    }

    function accessLinus(){
        return view('IEMS\Linus.SITE.linus');
    }

    function accessRates(){
        return view('IEMS\Linus.SITE.rates');
    }

    public function accessAnnouncement()
    {
        $anno = announcement::all();
        return view('IEMS\Linus.SITE.announcement')->with('announcement',$anno);
    }

    function accessAnnouncementDisplay($anno_ID)
    {
        $anno = announcement::find($anno_ID);
        return view('IEMS\Linus.SITE.announcement_display')->with('announcement',$anno);
    }

}
