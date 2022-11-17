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

class studentController extends Controller
{
    //
    public function studentDashboard()
    {

        $searchData = DB::table('wildlife')
        ->select('wildlife.wildlife_class','wildlife.wildlife_species')
        ->distinct('wildlife.wildlife_class','wildlife.wildlife_species')
        ->where('wildlife_type','Zoo')
        ->get();

        $studentDashboard = Wildlife::where('wildlife_type','Zoo')->get();
        return view ('IEMS.Linus.STUDENT.StudentWLDashboard')
        ->with('studentDashboard', $studentDashboard)
        ->with('searchData', $searchData);
    }//end viewing of student wildlife dashboard

    public function thesis()
    {
        $searchData = DB::table('thesis_paper')
        ->select('thesis_paper.thesis_type','thesis_paper.thesis_reference')
        ->distinct('thesis_paper.thesis_type','thesis_paper.thesis_reference')
        ->get();

        $thesis = thesis_paper::all();
        return view('IEMS.Linus.STUDENT.StudentThesisDashboard')
        ->with('thesis',$thesis)
        ->with('searchData', $searchData);
    }
    public function gradThesis()
    {
        $searchData = DB::table('thesis_paper')
        ->select('thesis_paper.thesis_type','thesis_paper.thesis_reference')
        ->distinct('thesis_paper.thesis_type','thesis_paper.thesis_reference')
        ->get();

        $thesis = thesis_paper::where('thesis_type','PostGraduate')->get();
        return view('IEMS\Linus.STUDENT.StudentThesisDashboard')
        ->with('thesis',$thesis)
        ->with('searchData', $searchData);
    }
    public function undergradThesis()
    {
        $searchData = DB::table('thesis_paper')
        ->select('thesis_paper.thesis_type','thesis_paper.thesis_reference')
        ->distinct('thesis_paper.thesis_type','thesis_paper.thesis_reference')
        ->get();

        $thesis = thesis_paper::where('thesis_type','UnderGraduate')->get();
        return view('IEMS\Linus.STUDENT.StudentThesisDashboard')
        ->with('thesis',$thesis)
        ->with('searchData', $searchData);
    }


    public function journal()
    {
        $searchData = DB::table('journal_article')
        ->select('journal_article.journal_reference','journal_article.date_published')
        ->distinct('journal_article.journal_reference','journal_article.date_published')
        ->get();

        $journal = journal_article::all();
        return view('IEMS.Linus.STUDENT.StudentJournalDashboard')
        ->with('journal',$journal)
        ->with('searchData', $searchData);
    }

    public function boneCollection()
    {
        $wildlife = Wildlife::where('wildlife_type','Bone')->get();
        return view ('IEMS.Linus.STUDENT.StudentBoneCollection')->with('wildlifes', $wildlife);
    }
    public function refCollection()
    {
        $wildlife = Wildlife::where('wildlife_type','Reference')->get();
        return view ('IEMS.Linus.STUDENT.StudentRefCollection')->with('wildlifes', $wildlife);
    }

    public function request()
    {
        $anno = announcement::where('user_ID', '=', Auth::user()->id )->get();
        return view('IEMS.Linus.STUDENT.StudentReqDashboard')->with('announcement',$anno);
    }
    //for storing announcement

    public function storeAnno(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'anno_title' => 'required',
            'anno_author' => 'required',
            'anno_date' => 'required',
            'anno_content' => 'required',
            'anno_status' => 'required',
            'user_ID' => 'required',
            ]);

            if($validator->fails())
            {
            return back()->withErrors($validator)->withInput()->with('error','Something went wrong. Please try again.');
            }
            else
            {
                $filename = time().request()->file('anno_pic')->getClientOriginalName();
                $path = request()->file('anno_pic')->move('storage/images',$filename);

                $anno = [
                    'anno_title' => $request->anno_title,
                    'anno_author' => $request->anno_author,
                    'anno_date' => $request->anno_date,
                    'anno_content' => $request->anno_content,
                    'anno_status' => $request->anno_status,
                    'user_ID' => $request->user_ID,
                    'anno_pic' => $path,
                ];
                announcement::create($anno);
                $anno = announcement::where('user_ID', '=', Auth::user()->id )->get();
                return view('IEMS/Linus.STUDENT.requestDashboard')->with('announcement',$anno);
            }

    }

    public function updateAnno(Request $request, $id)
    {
        $anno = announcement::find($id);
        $input = $request->all();
        $anno->update($input);
        $anno = announcement::where('user_ID', '=', Auth::user()->id )->get();
        return view('IEMS.Linus.STUDENT.requestDashboard')->with('announcement',$anno);
    }//end of updating request table

    public function deleteAnno($id)
    {
        announcement::destroy($id);
        $anno = announcement::where('user_ID', '=', Auth::user()->id )->get();
        return view('IEMS.Linus.STUDENT.requestDashboard')->with('announcement',$anno);
    }//end of deleting user accounts

    public function searchWildlife()
    {
        $searchText = $_GET['searchWildlife'];
        $wildlife = Wildlife::where('wildlife_name','LIKE','%'.$searchText.'%')
                            ->where('wildlife_type','Zoo')
                            ->get();
        return view('IEMS.Linus.STUDENT.StudentSearchwildlife',compact('wildlife'));
    }

    public function advanceSearchWildlife(Request $request)
    {
        $wildlife = Wildlife::where('wildlife_type','Zoo')->get();

        //for class
        if($request->wildlife_class)
        {
            $wildlife = Wildlife::where('wildlife_class','LIKE','%'.$request->wildlife_class.'%')
                                ->where('wildlife_type','Zoo')
                                ->get();
        }
        //for species
        if($request->wildlife_species)
        {
            $wildlife = Wildlife::where('wildlife_species','LIKE','%'.$request->wildlife_species.'%')
                                ->where('wildlife_type','Zoo')
                                ->get();
        }

        //for class and specie
        if($request->wildlife_class && $request->wildlife_species)
        {
            $wildlife = Wildlife::where('wildlife_class','LIKE','%'.$request->wildlife_class.'%')
                                ->where('wildlife_species','LIKE','%'.$request->wildlife_species.'%')
                                ->where('wildlife_type','Zoo')
                                ->get();
        }
        return view('IEMS.Linus.STUDENT.StudentSearchwildlife',compact('wildlife'));
    }

    public function searchThesis()
    {
        $searchText = $_GET['searchThesis'];
        $thesis = thesis_paper::where('thesis_title','LIKE','%'.$searchText.'%')->get();
        return view('IEMS.Linus.FACULTY.searchThesis',compact('thesis'));
    }

    public function advanceSearchThesis(Request $request)
    {
        $thesis = thesis_paper::all();
        if($request->thesis_type)
        {
            $thesis = thesis_paper::where('thesis_type','LIKE','%'.$request->thesis_type.'%')->get();
        }
        if($request->thesis_reference)
        {
            $thesis = thesis_paper::where('thesis_reference','LIKE','%'.$request->thesis_reference.'%')->get();
        }
        if($request->thesis_type && $request->thesis_reference)
        {
            $thesis = thesis_paper::where('thesis_type','LIKE','%'.$request->thesis_type.'%')
                                    ->where('thesis_reference','LIKE','%'.$request->thesis_reference.'%')
                                    ->get();
        }
        return view('IEMS.Linus.FACULTY.searchThesis',compact('thesis'));
    }

    public function searchJournal()
    {
        $searchText = $_GET['searchJournal'];
        $journal = journal_article::where('journal_title','LIKE','%'.$searchText.'%')->get();
        return view('IEMS.Linus.FACULTY.searchJournal',compact('journal'));
    }

    public function advanceSearchJournal(Request $request)
    {
        $journal = journal_article::all();

        if($request->journal_reference)
        {
            $journal = journal_article::where('journal_reference','LIKE','%'.$request->journal_reference.'%')->get();
        }
        if($request->date_published)
        {
            $journal = journal_article::where('date_published','LIKE','%'.$request->date_published.'%')->get();
        }
        if($request->journal_reference && $request->date_published)
        {
            $journal = journal_article::where('journal_reference','LIKE','%'.$request->journal_reference.'%')
                                    ->where('date_published','LIKE','%'.$request->date_published.'%')
                                    ->get();
        }
        return view('IEMS.Linus.FACULTY.searchJournal',compact('journal'));
    }
    //end of search

}
