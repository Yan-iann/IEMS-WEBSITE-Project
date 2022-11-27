<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\announcement;
use Illuminate\Support\Facades\DB;

class IEMSWebsite extends Controller
{
    function accessHome()
    {
        $anno = announcement::orderBy('anno_ID', 'Desc')
            ->where('announcement.anno_status', 'approve')
            ->get();
        //$anno = announcement::all();
        return view('IEMS.Linus.SITE.home')->with('announcement', $anno);
    }

    function accessCollege()
    {
        return view('IEMS.Linus.SITE.college');
    }

    function accessEnrollment()
    {
        return view('IEMS.Linus.SITE.coursesenrollment');
    }

    function accessFacilities()
    {
        return view('IEMS.Linus.SITE.facilities');
    }

    function accessFacultyStaff()
    {

        //$faculty = user_info::where('','Faculty')->get();
        $faculty = DB::table('user_info')
            ->join('users', 'user_info.user_ID', "=", 'users.id')
            ->select('user_info.*', 'users.email')
            ->where('users.user_type', 'Faculty')
            ->get();
        return view('IEMS.Linus.SITE.facultystaff')->with('user', $faculty);;
    }

    function accessLinus()
    {
        return view('IEMS.Linus.SITE.linus');
    }

    function accessRates()
    {
        return view('IEMS.Linus.SITE.rates');
    }

    function accessVision()
    {
        return view('IEMS.Linus.SITE.visionmission');
    }

    public function accessAnnouncement()
    {
        $anno = DB::table('announcement')
            ->select('announcement.*')
            ->where('announcement.anno_status', 'approve')
            ->get();
        return view('IEMS.Linus.SITE.announcement')->with('announcement', $anno);
    }

    function accessAnnouncementDisplay($anno_ID)
    {
        $anno = announcement::find($anno_ID);
        return view('IEMS.Linus.SITE.announcement_display')->with('announcement', $anno);
    }

    function underConstruction()
    {
        return view('IEMS.Linus.SITE.construction');
    }
}
