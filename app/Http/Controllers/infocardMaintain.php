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
use App\Models\Infocard;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Symfony\Component\Serializer\Serializer;
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

        $thesis = thesis_paper::where('thesis_type','Graduate')->get();
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
        $anno->anno_status = $request->input('anno_status');
        $anno->save();

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
        ->with('searchStatus',$searchStatus)
        ->with('sucess','Announcement Modified');
    }//end of updating request table

    public function deleteAnnoF($id)
    {
        announcement::destroy($id);
        $anno = announcement::where('user_ID', '=', Auth::user()->id )->get();
        return redirect()->route('Faculty_request')
        ->with('announcement',$anno)
        ->with('sucess','Announcement Deleted');
    }//end of deleting user accounts

    public function Fprofile()
    {
        $profile = DB::table('users')
        ->where('users.id', '=' , Auth::user()->id )
        ->join('user_info','user_info.user_ID', "=" ,'users.id')
        ->select('user_info.*','users.email')
        ->get();

        $password = DB::table('users')
        ->where('users.id', '=' , Auth::user()->id )
        ->select('users.*')
        ->get();

        return view ('IEMS.Linus.FACULTY.FProfileView')
        ->with('profile',$profile)
        ->with('password',$password);
    }
    public function updatePassFaculty(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'password' => [
                'required',
                'confirmed',
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
            ],
            ]);
            if($validator->fails())
            {
                return redirect()->back()
                ->with('fail','Password Error');
            }//if failed return back
            else
            {
                $change = User::find($id);
                $change->password = Hash::make($request->password);
                $change->changed_pass = '1';
                $change->save(); 
                return redirect()->route('Fprofile')
                    ->with('sucess','New Password Updated');
                
            }
    }
    public function editFprofile(Request $request, $id)
    {
        $validator = Validator::make(request()->all(), [
            'name' => 'required',
            'last_name' => 'required',
            'rank'  => 'required',
            'specialty' => 'required',
            'educational' => 'required',
            'phone_no' => 'required',
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

                return redirect()->route('Fprofile')
                ->with('profile',$profile)
                ->with('sucess','Profile Updated Successfully');
            }//sucess
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
        $validator = Validator::make(request()->all(), [
            'wildlife_name' => 'required',
            'wildlife_scientific_name' => 'required',
            'wildlife_class'  => 'required',
            'wildlife_desc' => 'required',
            'wildlife_order' => 'required',
            'wildlife_family' => 'required',
            'wildlife_genus' => 'required',
            'wildlife_species' => 'required',
            'wildlife_location' => 'required',
            ]);
            if($validator->fails())
            {
                return redirect()->back()
                ->with('fail','Please Provide All Information');
            }//failed
            else
            {
                $wildlife = Wildlife::find($info_ID);
                $input = $request->all();
                if($request->hasfile('wildlife_pic'))
                {
                    $path = $wildlife["wildlife_pic"];
                    if(FILE::exists($path))
                    {
                        FILE::delete($path);
                    }//if there is picture already
                    $filename = time().request()->file('wildlife_pic')->getClientOriginalName();
                    $finalPath = request()->file('wildlife_pic')->move('storage/images',$filename);
                    $input["wildlife_pic"] = $finalPath;  
                }//end of updating picture

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
                ->with('searchLoc', $searchLoc)
                ->with('sucess','Critter Information Updated Successfully');
            }
    }

    public function updateBone(Request $request, $info_ID)
    {
        $validator = Validator::make(request()->all(), [
            'wildlife_name' => 'required',
            'wildlife_scientific_name' => 'required',
            'wildlife_genus' => 'required',
            'wildlife_desc' => 'required',
            ]);
            if($validator->fails())
            {
                return redirect()->back()
                ->with('fail','Please Provide All Information');
            }//failed
            else
            {
                $wildlife = Wildlife::find($info_ID);
                $input = $request->all();
                if($request->hasfile('wildlife_pic'))
                {
                    $path = $wildlife["wildlife_pic"];
                    if(FILE::exists($path))
                    {
                        FILE::delete($path);
                    }//if there is picture already
                    $filename = time().request()->file('wildlife_pic')->getClientOriginalName();
                    $finalPath = request()->file('wildlife_pic')->move('storage/images',$filename);
                    $input["wildlife_pic"] = $finalPath;  
                }//end of updating picture
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
                ->with('searchDate', $searchDate)
                ->with('sucess','Whale Bone Information Updated Successfully');
            }
    }
    public function updateRef(Request $request, $info_ID)
    {
        $validator = Validator::make(request()->all(), [
            'wildlife_name' => 'required',
            'wildlife_scientific_name' => 'required',
            'wildlife_genus' => 'required',
            'wildlife_desc' => 'required',
            ]);
            if($validator->fails())
            {
                return redirect()->back()
                ->with('fail','Please Provide All Information');
            }//failed
            else
            {
                $wildlife = Wildlife::find($info_ID);
                $input = $request->all();
                if($request->hasfile('wildlife_pic'))
                {
                    $path = $wildlife["wildlife_pic"];
                    if(FILE::exists($path))
                    {
                        FILE::delete($path);
                    }//if there is picture already
                    $filename = time().request()->file('wildlife_pic')->getClientOriginalName();
                    $finalPath = request()->file('wildlife_pic')->move('storage/images',$filename);
                    $input["wildlife_pic"] = $finalPath;  
                }//end of updating picture
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
                ->with('searchDate', $searchDate)
                ->with('sucess','Whale Bone Information Updated Successfully');
            }//sucess
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
        ->with('searchAuthor',$searchAuthor)
        ->with('sucess','Thesis Paper Information Updated Successfully');
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
        ->with('searchRef',$searchRef)
        ->with('sucess','Journal Article Information Updated Successfully');
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
        return redirect()->route('wildlife')
        ->with('wildlifes', $wildlife)
        ->with('searchClass', $searchClass)
        ->with('searchSpecie', $searchSpecie)
        ->with('searchLoc', $searchLoc)
        ->with('sucess','Critters Information Deleted Successfully');
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
        return redirect()->route('boneCollection')
        ->with('wildlifes', $wildlife)
        ->with('searchGenus', $searchGenus)
        ->with('searchDate', $searchDate)
        ->with('sucess','Whale Bone Information Deleted Succesfully');
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
        return redirect()->route('refCollection')
        ->with('wildlifes', $wildlife)
        ->with('searchGenus', $searchGenus)
        ->with('searchDate', $searchDate)
        ->with('sucess','Reference Information Deleted Succesfully');
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
        return redirect()->route('thesis')
        ->with('thesis',$thesis)
        ->with('searchRef',$searchRef)
        ->with('searchAuthor',$searchAuthor)
        ->with('sucess','Thesis Paper Information Deleted Successfully');
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
        return redirect()->route('journal')
        ->with('journal',$journal)
        ->with('searchDate',$searchDate)
        ->with('searchRef',$searchRef)
        ->with('sucess','Journal Article Information Deleted Successfully');
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

        $wildlife = Wildlife::where('wildlife_type','Zoo')->get();
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

         $wildlife = Wildlife::where('wildlife_type','Bone')->get();
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

        $wildlife = Wildlife::where('wildlife_type','Bone')->get();
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

        $wildlife = Wildlife::where('wildlife_type','Reference')->get();
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

        $wildlife = Wildlife::where('wildlife_type','Reference')->get();
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
        $anno = announcement::all();

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

    public function countAnalysis()
    {
        $critter = $wildlife = wildlife::where('wildlife_type',"Zoo")->count();
        $whalebone = $wildlife = wildlife::where('wildlife_type',"Bone")->count();
        $reference = $wildlife = wildlife::where('wildlife_type',"Reference")->count();
        $gradThesis = $thesis = thesis_paper::where('thesis_type','Graduate')->count();
        $undergradThesis = $thesis = thesis_paper::where('thesis_type','UnderGraduate')->count();
        $journal = journal_article::count();
        $announcement = announcement::count();

        $doughnut = ['Critters' => $critter, 'Whalebones' => $whalebone, 'References' => $reference, 'GradTheses' => $gradThesis, 'UndergradTheses' => $undergradThesis, 'Journals' => $journal, 'Announcements' => $announcement ];


        return view('IEMS.Linus.FACULTY.fAnalytics',compact('wildlife','gradThesis','undergradThesis','journal','critter','whalebone','reference','announcement','doughnut'));
    }
    //end of analysis


}
