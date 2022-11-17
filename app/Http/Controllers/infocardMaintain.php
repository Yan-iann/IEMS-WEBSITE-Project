<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Infocard;
use App\Models\Wildlife;
use App\Models\thesis_paper;
use App\Models\journal_article;
use App\Models\announcement;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect; 
use DB;

class infocardMaintain extends Controller
{
    //for viewing the infocards
    public function wildlife()
    {
        $searchClass = DB::table('wildlife')
        ->select('wildlife.wildlife_class')
        ->distinct('wildlife.wildlife_class')
        ->where('wildlife_type','Zoo')
        ->get();

        $searchSpecie = DB::table('wildlife')
        ->select('wildlife.wildlife_species')
        ->distinct('wildlife.wildlife_species')
        ->where('wildlife_type','Zoo')
        ->get();

        $searchLoc = DB::table('wildlife')
        ->select('wildlife.wildlife_location')
        ->distinct('wildlife.wildlife_location')
        ->where('wildlife_type','Zoo')
        ->get();
        
        $wildlife = Wildlife::where('wildlife_type','Zoo')->get();
        return view ('IEMS.Linus.FACULTY.wildlife')
        ->with('wildlifes', $wildlife)
        ->with('searchClass', $searchClass)
        ->with('searchSpecie', $searchSpecie)
        ->with('searchLoc', $searchLoc);
      
    }
    public function thesis()
    {

        $searchRef = DB::table('thesis_paper')
        ->select('thesis_paper.thesis_reference')
        ->distinct('thesis_paper.thesis_reference')
        ->get();

        $searchAuthor = DB::table('thesis_paper')
        ->select('thesis_paper.thesis_author')
        ->distinct('thesis_paper.thesis_author')
        ->get();

        $thesis = thesis_paper::all();
        return view('IEMS.Linus.FACULTY.thesis')
        ->with('thesis',$thesis)
        ->with('searchRef',$searchRef)
        ->with('searchAuthor',$searchAuthor);
    }

    public function gradThesis()
    {
        $searchRef = DB::table('thesis_paper')
        ->select('thesis_paper.thesis_reference')
        ->distinct('thesis_paper.thesis_reference')
        ->get();

        $searchAuthor = DB::table('thesis_paper')
        ->select('thesis_paper.thesis_author')
        ->distinct('thesis_paper.thesis_author')
        ->get();

        $thesis = thesis_paper::where('thesis_type','PostGraduate')->get();
        return view('IEMS.Linus.FACULTY.thesis')
        ->with('thesis',$thesis)
        ->with('searchRef',$searchRef)
        ->with('searchAuthor',$searchAuthor);
    }
    public function undergradThesis()
    {
        $searchRef = DB::table('thesis_paper')
        ->select('thesis_paper.thesis_reference')
        ->distinct('thesis_paper.thesis_reference')
        ->get();

        $searchAuthor = DB::table('thesis_paper')
        ->select('thesis_paper.thesis_author')
        ->distinct('thesis_paper.thesis_author')
        ->get();

        $thesis = thesis_paper::where('thesis_type','UnderGraduate')->get();
        return view('IEMS.Linus.FACULTY.thesis')
        ->with('thesis',$thesis)
        ->with('searchRef',$searchRef)
        ->with('searchAuthor',$searchAuthor);
    }

    public function journal()
    {
        $searchRef = DB::table('journal_article')
        ->select('journal_article.journal_reference')
        ->distinct('journal_article.journal_reference')
        ->get();

        $searchDate = DB::table('journal_article')
        ->select('journal_article.date_published')
        ->distinct('journal_article.date_published')
        ->get();


        $journal = journal_article::all();
        return view('IEMS.Linus.FACULTY.journal')
        ->with('journal',$journal)
        ->with('searchDate',$searchDate)
        ->with('searchRef',$searchRef);
    }

    public function request()
    {
        $anno = announcement::all();
        $name = User::where('id', '=', Auth::user()->id )->get();
        return view('IEMS.Linus.FACULTY.requestDashboardFaculty')
        ->with('announcement',$anno)
        ->with('name',$name);
    }

    public function boneCollection()
    {
        $wildlife = Wildlife::where('wildlife_type','Bone')->get();
        return view ('IEMS.Linus.FACULTY.boneCollection')->with('wildlifes', $wildlife);
    }

    public function refCollection()
    {
        $wildlife = Wildlife::where('wildlife_type','Reference')->get();
        return view ('IEMS.Linus.FACULTY.refCollection')->with('wildlifes', $wildlife);
    }

    public function updateAnnoF(Request $request, $id)
    {
        $anno = announcement::find($id);
        $input = $request->all();
        $anno->update($input);
        $anno = announcement::all();
        return view('IEMS.Linus.FACULTY.requestDashboardFaculty') ->with('announcement',$anno);
    }//end of updating request table

    public function Fprofile()
    {
        return view ('IEMS.Linus.FACULTY.FProfileView');
    }
    //end of viewing infocards
////////////////////////////////////////////////////////////////////////////////////////////////////////
    //for showing
    public function showWildlife($info_ID)
    {
        $wildlife = Wildlife::find($info_ID);
        return view('IEMS.Linus.FACULTY.displayWildlife')->with('wildlifes',$wildlife);
    }
    public function showThesis($info_ID)
    {
        $thesis = thesis_paper::find($info_ID);
        return view('IEMS.Linus.FACULTY.displayThesis')->with('thesis',$thesis);
    }
    public function showJournal($info_ID)
    {
        $journal = journal_article::find($info_ID);
        return view('IEMS.Linus.FACULTY.displayJournal')->with('journal',$journal);
    }
    //end of showing infocards
    ////////////////////////////////////////////////////////////////////////////////////////////////////
    //for editing infocards
    public function editWildlife($info_ID)
    {
        $wildlife = Wildlife::find($info_ID);
        return view('IEMS.Linus.FACULTY.editWildlife')->with('wildlifes',$wildlife);
    }
    public function updateWildlife(Request $request, $info_ID)
    {
        $wildlife = Wildlife::find($info_ID);
        $input = $request->all();
        $wildlife->update($input);

        $searchClass = DB::table('wildlife')
        ->select('wildlife.wildlife_class')
        ->distinct('wildlife.wildlife_class')
        ->where('wildlife_type','Zoo')
        ->get();

        $searchSpecie = DB::table('wildlife')
        ->select('wildlife.wildlife_species')
        ->distinct('wildlife.wildlife_species')
        ->where('wildlife_type','Zoo')
        ->get();

        $searchLoc = DB::table('wildlife')
        ->select('wildlife.wildlife_location')
        ->distinct('wildlife.wildlife_location')
        ->where('wildlife_type','Zoo')
        ->get();
        
        $wildlife = Wildlife::where('wildlife_type','Zoo')->get();
        return view ('IEMS.Linus.FACULTY.wildlife')
        ->with('wildlifes', $wildlife)
        ->with('searchClass', $searchClass)
        ->with('searchSpecie', $searchSpecie)
        ->with('searchLoc', $searchLoc);
    }
    public function updateBone(Request $request, $info_ID)
    {
        $wildlife = Wildlife::find($info_ID);
        $input = $request->all();
        $wildlife->update($input);
        $wildlife = Wildlife::where('wildlife_type','Bone')->get();
        return view('IEMS.Linus.FACULTY.boneCollection')->with('wildlifes',$wildlife);
    }
    public function updateRef(Request $request, $info_ID)
    {
        $wildlife = Wildlife::find($info_ID);
        $input = $request->all();
        $wildlife->update($input);
        $wildlife = Wildlife::where('wildlife_type','Reference')->get();
        return view('IEMS.Linus.FACULTY.refCollection')->with('wildlifes',$wildlife);
    }
    public function editThesis($info_ID)
    {
        $thesis = thesis_paper::find($info_ID);
        return view('IEMS.Linus.FACULTY.editThesis')->with('thesis',$thesis);
    }
    public function updateThesis(Request $request, $info_ID)
    {
        $thesis = thesis_paper::find($info_ID);
        $input = $request->all();
        $thesis->update($input);
        $thesis = thesis_paper::all();
        return view('IEMS.Linus.FACULTY.thesis')->with('thesis',$thesis);
    }
    public function editJournal($info_ID)
    {
        $journal = journal_article::find($info_ID);
        return view('IEMS.Linus.FACULTY.editJournal')->with('journal',$journal);
    }
    public function updateJournal(Request $request, $info_ID)
    {
        $journal = journal_article::find($info_ID);
        $input = $request->all();
        $journal->update($input);
        $journal = journal_article::all();
        return view('IEMS.Linus.FACULTY.journal')->with('journal',$journal);
    }
    //end of editing of infocards
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //for deleting infocards
    public function deleteWildlife($info_ID)
    {
        Infocard::destroy($info_ID);
          
        $searchClass = DB::table('wildlife')
        ->select('wildlife.wildlife_class')
        ->distinct('wildlife.wildlife_class')
        ->where('wildlife_type','Zoo')
        ->get();

        $searchSpecie = DB::table('wildlife')
        ->select('wildlife.wildlife_species')
        ->distinct('wildlife.wildlife_species')
        ->where('wildlife_type','Zoo')
        ->get();

        $searchLoc = DB::table('wildlife')
        ->select('wildlife.wildlife_location')
        ->distinct('wildlife.wildlife_location')
        ->where('wildlife_type','Zoo')
        ->get();
        
        $wildlife = Wildlife::where('wildlife_type','Zoo')->get();
        return view ('IEMS.Linus.FACULTY.wildlife')
        ->with('wildlifes', $wildlife)
        ->with('searchClass', $searchClass)
        ->with('searchSpecie', $searchSpecie)
        ->with('searchLoc', $searchLoc);
    }
    public function deleteThesis($info_ID)
    {
        Infocard::destroy($info_ID);

        $searchRef = DB::table('thesis_paper')
        ->select('thesis_paper.thesis_reference')
        ->distinct('thesis_paper.thesis_reference')
        ->get();

        $searchAuthor = DB::table('thesis_paper')
        ->select('thesis_paper.thesis_author')
        ->distinct('thesis_paper.thesis_author')
        ->get();

        $thesis = thesis_paper::all();
        return view('IEMS.Linus.FACULTY.thesis')
        ->with('thesis',$thesis)
        ->with('searchRef',$searchRef)
        ->with('searchAuthor',$searchAuthor);
    }
    public function deleteJournal($info_ID)
    {
        Infocard::destroy($info_ID);
        $journal = journal_article::all();
        return view ('IEMS.Linus.FACULTY.journal')->with('journal', $journal);
    }
    //end of deleting infocards
///////////////////////////////////////////////////////////////////////////////////////////////////////////// 

//search infocards
    public function searchwildlife(Request $request)
    {   
        $searchClass = DB::table('wildlife')
        ->select('wildlife.wildlife_class')
        ->distinct('wildlife.wildlife_class')
        ->where('wildlife_type','Zoo')
        ->get();

        $searchSpecie = DB::table('wildlife')
        ->select('wildlife.wildlife_species')
        ->distinct('wildlife.wildlife_species')
        ->where('wildlife_type','Zoo')
        ->get();

        $searchLoc = DB::table('wildlife')
        ->select('wildlife.wildlife_location')
        ->distinct('wildlife.wildlife_location')
        ->where('wildlife_type','Zoo')
        ->get();
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
         //for location
         if($request->wildlife_location)
         {
             $wildlife = Wildlife::where('wildlife_location','LIKE','%'.$request->wildlife_location.'%')
                                 ->where('wildlife_type','Zoo')
                                 ->get();
         }
         //for species and loc
         if($request->wildlife_species && $request->wildlife_location)
         {
             $wildlife = Wildlife::where('wildlife_species','LIKE','%'.$request->wildlife_species.'%')
                         ->where('wildlife_location','LIKE','%'.$request->wildlife_location.'%')
                         ->where('wildlife_type','Zoo')
                         ->get();
         }
         //for class and specie and loc
         if($request->wildlife_class && $request->wildlife_species && $request->wildlife_location)
         {
             $wildlife = Wildlife::where('wildlife_class','LIKE','%'.$request->wildlife_class.'%')
                                 ->where('wildlife_species','LIKE','%'.$request->wildlife_species.'%')
                                 ->where('wildlife_location','LIKE','%'.$request->wildlife_location.'%')
                                 ->where('wildlife_type','Zoo')
                                 ->get();            
         } 
        if($request->searchWildlife)
        {
        $wildlife = Wildlife::where('wildlife_name','LIKE','%'.$request->searchWildlife.'%')
                            ->where('wildlife_type','Zoo')
                            ->get();
        }
        return view('IEMS.Linus.FACULTY.searchwildlife')
        ->with('wildlife', $wildlife)
        ->with('searchClass', $searchClass)
        ->with('searchSpecie', $searchSpecie)
        ->with('searchLoc', $searchLoc);
    }

    public function advanceSearchWildlife(Request $request)
    {

        $searchClass = DB::table('wildlife')
        ->select('wildlife.wildlife_class')
        ->distinct('wildlife.wildlife_class')
        ->where('wildlife_type','Zoo')
        ->get();

        $searchSpecie = DB::table('wildlife')
        ->select('wildlife.wildlife_species')
        ->distinct('wildlife.wildlife_species')
        ->where('wildlife_type','Zoo')
        ->get();

        $searchLoc = DB::table('wildlife')
        ->select('wildlife.wildlife_location')
        ->distinct('wildlife.wildlife_location')
        ->where('wildlife_type','Zoo')
        ->get();

        $wildlife = Wildlife::where('wildlife_type','Zoo')->get();
        //for search
      
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
        //for location
        if($request->wildlife_location)
        {
            $wildlife = Wildlife::where('wildlife_location','LIKE','%'.$request->wildlife_location.'%')
                                ->where('wildlife_type','Zoo')
                                ->get();
        }
        //for species and loc
        if($request->wildlife_species && $request->wildlife_location)
        {
            $wildlife = Wildlife::where('wildlife_species','LIKE','%'.$request->wildlife_species.'%')
                        ->where('wildlife_location','LIKE','%'.$request->wildlife_location.'%')
                        ->where('wildlife_type','Zoo')
                        ->get();
        }
        //for class and specie and loc
        if($request->wildlife_class && $request->wildlife_species && $request->wildlife_location)
        {
            $wildlife = Wildlife::where('wildlife_class','LIKE','%'.$request->wildlife_class.'%')
                                ->where('wildlife_species','LIKE','%'.$request->wildlife_species.'%')
                                ->where('wildlife_location','LIKE','%'.$request->wildlife_location.'%')
                                ->where('wildlife_type','Zoo')
                                ->get();            
        }

        return view('IEMS.Linus.FACULTY.searchwildlife')
        ->with('wildlife', $wildlife)
        ->with('searchClass', $searchClass)
        ->with('searchSpecie', $searchSpecie)
        ->with('searchLoc', $searchLoc);
    }

//for thesis
    public function searchThesis(Request $request)
    {
        $searchRef = DB::table('thesis_paper')
        ->select('thesis_paper.thesis_reference')
        ->distinct('thesis_paper.thesis_reference')
        ->get();

        $searchAuthor = DB::table('thesis_paper')
        ->select('thesis_paper.thesis_author')
        ->distinct('thesis_paper.thesis_author')
        ->get();

        $thesis = thesis_paper::all();
        if($request->thesis_author)
        {
            $thesis = thesis_paper::where('thesis_author','LIKE','%'.$request->thesis_author.'%')->get();
        }
        if($request->thesis_reference)
        {
            $thesis = thesis_paper::where('thesis_reference','LIKE','%'.$request->thesis_reference.'%')->get();
        }
        if($request->thesis_author && $request->thesis_reference)
        {
            $thesis = thesis_paper::where('thesis_author','LIKE','%'.$request->thesis_author.'%')
                                    ->where('thesis_reference','LIKE','%'.$request->thesis_reference.'%')
                                    ->get();
        }
        if($request->searchThesis)
        {
            $thesis = thesis_paper::where('thesis_title','LIKE','%'.$request->searchThesis.'%')
                                    ->get();
        }
        
        return view('IEMS.Linus.FACULTY.searchThesis')
        ->with('thesis', $thesis)
        ->with('searchRef', $searchRef)
        ->with('searchAuthor', $searchAuthor);
    }
    public function advanceSearchThesis(Request $request)
    {   
        $searchRef = DB::table('thesis_paper')
        ->select('thesis_paper.thesis_reference')
        ->distinct('thesis_paper.thesis_reference')
        ->get();

        $searchAuthor = DB::table('thesis_paper')
        ->select('thesis_paper.thesis_author')
        ->distinct('thesis_paper.thesis_author')
        ->get();

        $thesis = thesis_paper::all();
        if($request->thesis_author)
        {
            $thesis = thesis_paper::where('thesis_author','LIKE','%'.$request->thesis_author.'%')->get();
        }
        if($request->thesis_reference)
        {
            $thesis = thesis_paper::where('thesis_reference','LIKE','%'.$request->thesis_reference.'%')->get();
        }
        if($request->thesis_author && $request->thesis_reference)
        {
            $thesis = thesis_paper::where('thesis_author','LIKE','%'.$request->thesis_author.'%')
                                    ->where('thesis_reference','LIKE','%'.$request->thesis_reference.'%')
                                    ->get();
        }
        return view('IEMS.Linus.FACULTY.searchThesis')
        ->with('thesis', $thesis)
        ->with('searchRef', $searchRef)
        ->with('searchAuthor', $searchAuthor);
    }

    public function searchJournal()
    {
        $searchText = $_GET['searchJournal'];
        $journal = journal_article::where('journal_title','LIKE','%'.$searchText.'%')->get();
        return view('IEMS.Linus.FACULTY.searchJournal',compact('journal'));
    }

    public function advanceSearchJournal(Request $request)
    {   
        $searchRef = DB::table('journal_article')
        ->select('journal_article.journal_reference')
        ->distinct('journal_article.journal_reference')
        ->get();

        $searchDate = DB::table('journal_article')
        ->select('journal_article.date_published')
        ->distinct('journal_article.date_published')
        ->get();

        $journal = journal_article::all();
        
        if($request->journal_reference)
        {
            $journal = journal_article::where('journal_reference','LIKE','%'.$request->journal_reference.'%')
            ->get();
        }
        if($request->date_published)
        {
            $journal = journal_article::where('date_published','LIKE','%'.$request->date_published.'%')
            ->get();
        }
        if($request->journal_reference && $request->date_published)
        {
            $journal = journal_article::where('journal_reference','LIKE','%'.$request->journal_reference.'%')
                                    ->where('date_published','LIKE','%'.$request->date_published.'%')
                                    ->get();
        }
        return view('IEMS.Linus.FACULTY.searchJournal')
        ->with('journal', $journal)
        ->with('searchRef', $searchRef)
        ->with('searchDate', $searchDate);
    }

    //end of search//
    
    //start of analysis

    public function analysis()
    {
        $wildlife = Wildlife::count();
        $gradThesis = $thesis = thesis_paper::where('thesis_type','PostGraduate')->count();
        $undergradThesis = $thesis = thesis_paper::where('thesis_type','UnderGraduate')->count();
        $journal = journal_article::count();

        return view('IEMS.Linus.FACULTY.fAnalytics',compact('wildlife','gradThesis','undergradThesis','journal'));
    }
    //end of analysis


}
