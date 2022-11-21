<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\user_info;
use App\Models\User;
use App\Models\Wildlife;
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

class studentController extends Controller
{
    //
    public function studentDashboard()
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
        return view ('IEMS.Linus.STUDENT.StudentWLDashboard')
        ->with('studentDashboard', $wildlife)
        ->with('searchClass', $searchClass)
        ->with('searchSpecie', $searchSpecie)
        ->with('searchLoc', $searchLoc);
    }//end viewing of student wildlife dashboard

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
        return view('IEMS.Linus.STUDENT.StudentThesisDashboard')
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
         return view('IEMS.Linus.STUDENT.StudentThesisDashboard')
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
        return view('IEMS.Linus.STUDENT.StudentThesisDashboard')
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
        return view('IEMS.Linus.STUDENT.StudentJournalDashboard')
        ->with('journal',$journal)
        ->with('searchDate',$searchDate)
        ->with('searchRef',$searchRef);
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
        return view ('IEMS.Linus.STUDENT.StudentBoneCollection')
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
        return view ('IEMS.Linus.STUDENT.StudentRefCollection')
        ->with('wildlifes', $wildlife)
        ->with('searchGenus', $searchGenus)
        ->with('searchDate', $searchDate);
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
                return redirect()->route('Student_request')
                ->with('announcement',$anno)
                ->with('sucess','Announcement Successfully Requested');
            }

    }

    public function updateAnno(Request $request, $id)
    {
        $anno = announcement::find($id);
        $input = $request->all();
        $anno->update($input);
        $anno = announcement::where('user_ID', '=', Auth::user()->id )->get();
        return redirect()->route('Student_request')
        ->with('announcement',$anno)
        ->with('sucess','Announcement Request Updated Succesfully');
    }//end of updating request table

    public function deleteAnno($id)
    {
        announcement::destroy($id);
        $anno = announcement::where('user_ID', '=', Auth::user()->id )->get();
        return redirect()->route('Student_request')
        ->with('announcement',$anno)
        ->with('sucess','Announcement Request Deleted Succesfully');
    }//end of deleting annoucements accounts

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
        return view('IEMS.Linus.STUDENT.searchWildlife')
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

        return view('IEMS.Linus.STUDENT.searchWildlife')
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
        
        return view('IEMS.Linus.STUDENT.searchThesis')
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
        return view('IEMS.Linus.STUDENT.searchThesis')
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
        return view('IEMS.Linus.STUDENT.searchJournal')
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
        return view('IEMS.Linus.STUDENT.searchJournal')
        ->with('journal', $journal)
        ->with('searchRef', $searchRef)
        ->with('searchDate', $searchDate);
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
        return view ('IEMS.Linus.STUDENT.searchBoneCollection')
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
        return view ('IEMS.Linus.STUDENT.searchBoneCollection')
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
        return view ('IEMS.Linus.STUDENT.searchRefCollection')
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
         
        return view ('IEMS.Linus.STUDENT.searchRefCollection')
        ->with('wildlifes', $wildlife)
        ->with('searchGenus', $searchGenus)
        ->with('searchDate', $searchDate);
    }

    public function Sprofile()
    {
        $profile = DB::table('users')
        ->where('users.id', '=' , Auth::user()->id )
        ->join('user_info','user_info.user_ID', "=" ,'users.id')
        ->select('user_info.*','users.email')
        ->get();

        return view ('IEMS.Linus.STUDENT.SProfileView')
        ->with('profile',$profile);
    }

    public function editSprofile(Request $request, $id)
    {
        $validator = Validator::make(request()->all(), [
            'name' => 'required',
            'last_name' => 'required',
            ]);
            if($validator->fails())
            {
                return redirect()->back()
                ->with('fail','Please Provide All Information');
            }//failed
            else
            {
                $user = user_info::find($id);
                $input = $request->all();
                if($request->hasfile('profile_pic'))
                {
                    $path = $user["profile_pic"];
                    if(FILE::exists($path))
                    {
                        FILE::delete($path);
                    }//if there is picture already
                    $filename = time().request()->file('profile_pic')->getClientOriginalName();
                    $finalPath = request()->file('profile_pic')->move('storage/images',$filename);
                    $input["profile_pic"] = $finalPath;
                }
                $user->update($input);

                $profile = DB::table('users')
                ->where('users.id', '=' , Auth::user()->id )
                ->join('user_info','user_info.user_ID', "=" ,'users.id')
                ->select('user_info.*','users.*')
                ->get();

                return redirect()->route('Sprofile')
                ->with('profile',$profile)
                ->with('sucess','Profile Updated Successfully');
            }//sucess
    }
    //end of search

}
