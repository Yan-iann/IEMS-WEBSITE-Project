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
use Illuminate\Support\Facades\File;
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
        $searchStatus = DB::table('announcement')
        ->select('announcement.anno_status')
        ->distinct('announcement.anno_status')
        ->get();

        $anno = DB::table('users')
        ->join('announcement','users.id',"=",'announcement.user_ID')
        ->select('announcement.*','users.name')
        ->get();

        //$anno = announcement::all();
        return view('IEMS.Linus.FACULTY.requestDashboardFaculty')
        ->with('announcement',$anno)
        ->with('searchStatus',$searchStatus);

    }

    public function boneCollection()
    {
        $searchGenus = DB::table('wildlife')
        ->select('wildlife.wildlife_genus')
        ->distinct('wildlife.wildlife_genus')
        ->where('wildlife_type','Bone')
        ->get();

        $searchDate = DB::table('wildlife')
        ->select('wildlife.date_added')
        ->distinct('wildlife.date_added')
        ->where('wildlife_type','Bone')
        ->get();

        $wildlife = Wildlife::where('wildlife_type','Bone')->get();
        return view ('IEMS.Linus.FACULTY.boneCollection')
        ->with('wildlifes', $wildlife)
        ->with('searchGenus', $searchGenus)
        ->with('searchDate', $searchDate);
    }

    public function refCollection()
    {
        $searchGenus = DB::table('wildlife')
        ->select('wildlife.wildlife_genus')
        ->distinct('wildlife.wildlife_genus')
        ->where('wildlife_type','Reference')
        ->get();

        $searchDate = DB::table('wildlife')
        ->select('wildlife.date_added')
        ->distinct('wildlife.date_added')
        ->where('wildlife_type','Reference')
        ->get();

        $wildlife = Wildlife::where('wildlife_type','Reference')->get();
        return view ('IEMS.Linus.FACULTY.refCollection')
        ->with('wildlifes', $wildlife)
        ->with('searchGenus', $searchGenus)
        ->with('searchDate', $searchDate);

    }

    public function updateAnnoF(Request $request, $id)
    {
        $anno = announcement::find($id);
        $input = $request->all();
        $anno->update($input);

        $searchStatus = DB::table('announcement')
        ->select('announcement.anno_status')
        ->distinct('announcement.anno_status')
        ->get();

        $anno = DB::table('users')
        ->join('announcement','users.id',"=",'announcement.user_ID')
        ->select('announcement.*','users.name')
        ->get();

        return redirect()->route('Faculty_request')
        ->with('announcement',$anno)
        ->with('searchStatus',$searchStatus);
    }//end of updating request table

    public function Fprofile()
    {
        $profile = DB::table('users')
        ->where('users.id', '=' , Auth::user()->id )
        ->join('user_info','user_info.user_ID', "=" ,'users.id')
        ->select('user_info.*','users.email')
        ->get();

        return view ('IEMS.Linus.FACULTY.FProfileView')
        ->with('profile',$profile);
    }

    public function editFprofile(Request $request, $id)
    {
        $profile = DB::table('users')
        ->where('users.id', '=' , Auth::user()->id )
        ->join('user_info','user_info.user_ID', "=" ,'users.id')
        ->select('user_info.*','users.*')
        ->get();
        
        $user = user_info::find($id);
        $user->name = $request->input('name');
        $user->middle_name = $request->input('middle_name');
        $user->last_name = $request->input('last_name');
        $user->phone_no = $request->input('phone_no');
        $user->rank = $request->input('rank');
        $user->educational = $request->input('educational');
        $user->specialty = $request->input('specialty');

        if($request->hasfile('profile_pic'))
        {
            $path = 'storage/images'.$user->profile_pic;
            if(FILE::exists($path))
            {
                FILE::delete($path);
            }
            $file = $request->file('profile_pic');
            $extention = $file->getClientOriginalExtension();
            $filename = time(). '.'.$extention;
            $file->move('storage/images',$filename);
            $user->profile_pic = $filename;
        }
        $user->save();
        return redirect()->route('Fprofile')
        ->with('user', $user)
        ->with('profile',$profile);
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
        return redirect()->route('wildlife')
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

        $searchGenus = DB::table('wildlife')
        ->select('wildlife.wildlife_genus')
        ->distinct('wildlife.wildlife_genus')
        ->where('wildlife_type','Bone')
        ->get();

        $searchDate = DB::table('wildlife')
        ->select('wildlife.date_added')
        ->distinct('wildlife.date_added')
        ->where('wildlife_type','Bone')
        ->get();

        $wildlife = Wildlife::where('wildlife_type','Bone')->get();
        return redirect()->route('boneCollection')
        ->with('wildlifes', $wildlife)
        ->with('searchGenus', $searchGenus)
        ->with('searchDate', $searchDate);
    }
    public function updateRef(Request $request, $info_ID)
    {
        $wildlife = Wildlife::find($info_ID);
        $input = $request->all();
        $wildlife->update($input);

        $searchGenus = DB::table('wildlife')
        ->select('wildlife.wildlife_genus')
        ->distinct('wildlife.wildlife_genus')
        ->where('wildlife_type','Reference')
        ->get();

        $searchDate = DB::table('wildlife')
        ->select('wildlife.date_added')
        ->distinct('wildlife.date_added')
        ->where('wildlife_type','Reference')
        ->get();

        $wildlife = Wildlife::where('wildlife_type','Reference')->get();
        return redirect()->route('refCollection')
        ->with('wildlifes', $wildlife)
        ->with('searchGenus', $searchGenus)
        ->with('searchDate', $searchDate);
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

        $searchRef = DB::table('thesis_paper')
        ->select('thesis_paper.thesis_reference')
        ->distinct('thesis_paper.thesis_reference')
        ->get();

        $searchAuthor = DB::table('thesis_paper')
        ->select('thesis_paper.thesis_author')
        ->distinct('thesis_paper.thesis_author')
        ->get();

        $thesis = thesis_paper::all();
        return redirect()->route('thesis')
        ->with('thesis',$thesis)
        ->with('searchRef',$searchRef)
        ->with('searchAuthor',$searchAuthor);
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

        $searchRef = DB::table('journal_article')
        ->select('journal_article.journal_reference')
        ->distinct('journal_article.journal_reference')
        ->get();

        $searchDate = DB::table('journal_article')
        ->select('journal_article.date_published')
        ->distinct('journal_article.date_published')
        ->get();


        $journal = journal_article::all();
        return redirect()->route('journal')
        ->with('journal',$journal)
        ->with('searchDate',$searchDate)
        ->with('searchRef',$searchRef);
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
    public function deleteBone($info_ID)
    {
        Infocard::destroy($info_ID);
          
        $searchGenus = DB::table('wildlife')
        ->select('wildlife.wildlife_genus')
        ->distinct('wildlife.wildlife_genus')
        ->where('wildlife_type','Bone')
        ->get();

        $searchDate = DB::table('wildlife')
        ->select('wildlife.date_added')
        ->distinct('wildlife.date_added')
        ->where('wildlife_type','Bone')
        ->get();

        $wildlife = Wildlife::where('wildlife_type','Bone')->get();
        return view ('IEMS.Linus.FACULTY.boneCollection')
        ->with('wildlifes', $wildlife)
        ->with('searchGenus', $searchGenus)
        ->with('searchDate', $searchDate);
    }

    public function deleteRef($info_ID)
    {
        Infocard::destroy($info_ID);
          
       $searchGenus = DB::table('wildlife')
        ->select('wildlife.wildlife_genus')
        ->distinct('wildlife.wildlife_genus')
        ->where('wildlife_type','Reference')
        ->get();

        $searchDate = DB::table('wildlife')
        ->select('wildlife.date_added')
        ->distinct('wildlife.date_added')
        ->where('wildlife_type','Reference')
        ->get();

        $wildlife = Wildlife::where('wildlife_type','Reference')->get();
        return view ('IEMS.Linus.FACULTY.refCollection')
        ->with('wildlifes', $wildlife)
        ->with('searchGenus', $searchGenus)
        ->with('searchDate', $searchDate);
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

    public function searchBone(Request $request)
    {   
        $searchGenus = DB::table('wildlife')
        ->select('wildlife.wildlife_genus')
        ->distinct('wildlife.wildlife_genus')
        ->where('wildlife_type','Bone')
        ->get();

        $searchDate = DB::table('wildlife')
        ->select('wildlife.date_added')
        ->distinct('wildlife.date_added')
        ->where('wildlife_type','Bone')
        ->get();

         //for genus
         if($request->wildlife_genus)
         {
             $wildlife = Wildlife::where('wildlife_genus','LIKE','%'.$request->wildlife_genus.'%')
                                 ->where('wildlife_type','Bone')
                                 ->get();
         }
         //for date
         if($request->date_added)
         {
             $wildlife = Wildlife::where('date_added','LIKE','%'.$request->date_added.'%')
                                 ->where('wildlife_type','Bone')
                                 ->get();
         }
         
         //for genus and date
         if($request->wildlife_species && $request->date_added)
         {
             $wildlife = Wildlife::where('wildlife_genus','LIKE','%'.$request->wildlife_genus.'%')
                         ->where('date_added','LIKE','%'.$request->date_added.'%')
                         ->where('wildlife_type','Bone')
                         ->get();
         }
         
        if($request->searchBone)
        {
        $wildlife = Wildlife::where('wildlife_name','LIKE','%'.$request->searchBone.'%')
                            ->where('wildlife_type','Bone')
                            ->get();
        }
        return view ('IEMS.Linus.FACULTY.searchBoneCollection')
        ->with('wildlifes', $wildlife)
        ->with('searchGenus', $searchGenus)
        ->with('searchDate', $searchDate);
    }

    public function advanceSearchBone(Request $request)
    {

        $searchGenus = DB::table('wildlife')
        ->select('wildlife.wildlife_genus')
        ->distinct('wildlife.wildlife_genus')
        ->where('wildlife_type','Bone')
        ->get();

        $searchDate = DB::table('wildlife')
        ->select('wildlife.date_added')
        ->distinct('wildlife.date_added')
        ->where('wildlife_type','Bone')
        ->get();

         //for genus
         if($request->wildlife_genus)
         {
             $wildlife = Wildlife::where('wildlife_genus','LIKE','%'.$request->wildlife_genus.'%')
                                 ->where('wildlife_type','Bone')
                                 ->get();
         }
         //for date
         if($request->date_added)
         {
             $wildlife = Wildlife::where('date_added','LIKE','%'.$request->date_added.'%')
                                 ->where('wildlife_type','Bone')
                                 ->get();
         }
         
         //for genus and date
         if($request->wildlife_species && $request->date_added)
         {
             $wildlife = Wildlife::where('wildlife_genus','LIKE','%'.$request->wildlife_genus.'%')
                         ->where('date_added','LIKE','%'.$request->date_added.'%')
                         ->where('wildlife_type','Bone')
                         ->get();
         }
         
        if($request->searchBone)
        {
        $wildlife = Wildlife::where('wildlife_name','LIKE','%'.$request->searchBone.'%')
                            ->where('wildlife_type','Bone')
                            ->get();
        }
        return view ('IEMS.Linus.FACULTY.searchBoneCollection')
        ->with('wildlifes', $wildlife)
        ->with('searchGenus', $searchGenus)
        ->with('searchDate', $searchDate);
    }

    public function searchRef(Request $request)
    {   
        $searchGenus = DB::table('wildlife')
        ->select('wildlife.wildlife_genus')
        ->distinct('wildlife.wildlife_genus')
        ->where('wildlife_type','Reference')
        ->get();

        $searchDate = DB::table('wildlife')
        ->select('wildlife.date_added')
        ->distinct('wildlife.date_added')
        ->where('wildlife_type','Reference')
        ->get();

         //for genus
         if($request->wildlife_genus)
         {
             $wildlife = Wildlife::where('wildlife_genus','LIKE','%'.$request->wildlife_genus.'%')
                                 ->where('wildlife_type','Reference')
                                 ->get();
         }
         //for date
         if($request->date_added)
         {
             $wildlife = Wildlife::where('date_added','LIKE','%'.$request->date_added.'%')
                                 ->where('wildlife_type','Reference')
                                 ->get();
         }
         
         //for genus and date
         if($request->wildlife_species && $request->date_added)
         {
             $wildlife = Wildlife::where('wildlife_genus','LIKE','%'.$request->wildlife_genus.'%')
                         ->where('date_added','LIKE','%'.$request->date_added.'%')
                         ->where('wildlife_type','Reference')
                         ->get();
         }
         
        if($request->searchRef)
        {
        $wildlife = Wildlife::where('wildlife_name','LIKE','%'.$request->searchRef.'%')
                            ->where('wildlife_type','Reference')
                            ->get();
        }
        return view ('IEMS.Linus.FACULTY.searchRefCollection')
        ->with('wildlifes', $wildlife)
        ->with('searchGenus', $searchGenus)
        ->with('searchDate', $searchDate);
    }

    public function advanceSearchRef(Request $request)
    {

        $searchGenus = DB::table('wildlife')
        ->select('wildlife.wildlife_genus')
        ->distinct('wildlife.wildlife_genus')
        ->where('wildlife_type','Reference')
        ->get();

        $searchDate = DB::table('wildlife')
        ->select('wildlife.date_added')
        ->distinct('wildlife.date_added')
        ->where('wildlife_type','Reference')
        ->get();

         //for genus
         if($request->wildlife_genus)
         {
             $wildlife = Wildlife::where('wildlife_genus','LIKE','%'.$request->wildlife_genus.'%')
                                 ->where('wildlife_type','Reference')
                                 ->get();
         }
         //for date
         if($request->date_added)
         {
             $wildlife = Wildlife::where('date_added','LIKE','%'.$request->date_added.'%')
                                 ->where('wildlife_type','Reference')
                                 ->get();
         }
         
         //for genus and date
         if($request->wildlife_species && $request->date_added)
         {
             $wildlife = Wildlife::where('wildlife_genus','LIKE','%'.$request->wildlife_genus.'%')
                         ->where('date_added','LIKE','%'.$request->date_added.'%')
                         ->where('wildlife_type','Reference')
                         ->get();
         }
         
        return view ('IEMS.Linus.FACULTY.searchRefCollection')
        ->with('wildlifes', $wildlife)
        ->with('searchGenus', $searchGenus)
        ->with('searchDate', $searchDate);
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

    public function searchJournal(Request $request)
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
        if($request->searchJournal)
        {
            $journal = journal_article::where('journal_title','LIKE','%'.$request->searchJournal.'%')->get();
        }
        return view('IEMS.Linus.FACULTY.searchJournal')
        ->with('journal', $journal)
        ->with('searchRef', $searchRef)
        ->with('searchDate', $searchDate);
        
        
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

    public function searchReq(Request $request)
    {
       
        $searchStatus = DB::table('announcement')
        ->select('announcement.anno_status')
        ->distinct('announcement.anno_status')
        ->get();

        $anno = announcement::all();

        if($request->anno_status)
        {

            $anno = DB::table('users')
            ->join('announcement','users.id',"=",'announcement.user_ID')
            ->where('anno_status','LIKE','%'.$request->anno_status.'%')
            ->get();
        }
        
        if($request->searchRequest)
        {
            $anno = DB::table('users')
            ->where('anno_title','LIKE','%'.$request->searchRequest.'%')
            ->join('announcement','users.id',"=",'announcement.user_ID')
            ->get();
        }
        return view('IEMS.Linus.FACULTY.searchRequest')
        ->with('announcement',$anno)
        ->with('searchStatus', $searchStatus);

    }

    public function advanceSearchReq(Request $request)
    {   
        $searchStatus = DB::table('announcement')
        ->select('announcement.anno_status')
        ->distinct('announcement.anno_status')
        ->get();
        //$anno = announcement::all();
        
        if($request->anno_status)
        {

            $anno = DB::table('users')
            ->join('announcement','users.id',"=",'announcement.user_ID')
            ->where('anno_status','LIKE','%'.$request->anno_status.'%')
            ->get();
        }
        return view('IEMS.Linus.FACULTY.searchRequest')
        ->with('announcement',$anno)
        ->with('searchStatus', $searchStatus);
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
