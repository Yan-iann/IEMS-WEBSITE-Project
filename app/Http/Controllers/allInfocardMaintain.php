<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Infocard;
use App\Models\Wildlife;
use App\Models\thesis_paper;
use App\Models\journal_article;
use Illuminate\Support\Facades\Redirect;  
use App\Providers\RouteServiceProvider;
use DB;
class allInfocardMaintain extends Controller
{
    public function storeDataWildlife(Request $request)
    {
         $validator = Validator::make(request()->all(), [
        'wildlife_pic' => 'required',
        'wildlife_name' => 'required',
        'wildlife_scientific_name' => 'required',
        'wildlife_class'  => 'required',
        'wildlife_desc' => 'required',
        'wildlife_order' => 'required',
        'wildlife_family' => 'required',
        'wildlife_genus' => 'required',
        'wildlife_species' => 'required',
        'wildlife_location' => 'required',
        'wildlife_desc' => 'required',
        'date_added' => 'required',
        'wildlife_status' => 'required',
        'wildlife_type' => 'required',
        'info_type' => 'required',
        ]);
        if($validator->fails())
        {
            return redirect()->back()
            ->with('fail','Please Provide All Information');
        }//failed
        else
        {
            $infocard = new Infocard;
            $infocard->info_type = $request->info_type;
            if($infocard->save())
            {
                $requestData = request()->all();
                $requestData["info_ID"] =  $infocard->info_ID;
                $filename = time().request()->file('wildlife_pic')->getClientOriginalName();
                $path = request()->file('wildlife_pic')->move('storage/images',$filename);
                $requestData["wildlife_pic"] = $path;
                Wildlife::create($requestData);

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
                ->with('sucess','Critter Added Succesfully');
            }
            else
            {
                return redirect()->back()
                ->with('fail','Infocard Not Saved');
            }
        }//successful validation
    }//end of adding wildlife

    public function storeDataBone(Request $request)
    {
        $validator = Validator::make(request()->all(), [
        'wildlife_pic' => 'required',
        'wildlife_name' => 'required',
        'wildlife_scientific_name' => 'required',
        'wildlife_genus' => 'required',
        'wildlife_desc' => 'required',
        'date_added' => 'required',
        'wildlife_status' => 'required',
        'wildlife_type' => 'required',
        'info_type' => 'required',
        ]);
        if($validator->fails())
        {
            return redirect()->back()
            ->with('fail','Please Provide All Information');
        }//failed
        else
        {
            $infocard = new Infocard;
            $infocard->info_type = $request->info_type;
            if($infocard->save())
            {
                $requestData = request()->all();
                $requestData["info_ID"] =  $infocard->info_ID;
                $filename = time().request()->file('wildlife_pic')->getClientOriginalName();
                $path = request()->file('wildlife_pic')->move('storage/images',$filename);
                $requestData["wildlife_pic"] = $path;
                Wildlife::create($requestData);

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
                ->with('sucess','Whale Bone Added Succesfully');
            }
            else
            {
                return redirect()->back()
                ->with('fail','Infocard Not Saved');
            }
        }//succesfull fields
    }//end of adding bone

    public function storeDataRef(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'wildlife_pic' => 'required',
            'wildlife_name' => 'required',
            'wildlife_scientific_name' => 'required',
            'wildlife_genus' => 'required',
            'wildlife_desc' => 'required',
            'date_added' => 'required',
            'wildlife_status' => 'required',
            'wildlife_type' => 'required',
            'info_type' => 'required',
            ]);
        if($validator->fails())
        {
            return redirect()->back()
            ->with('fail','Please Provide All Information');
        }//failed
        else
        {
            $infocard = new Infocard;
            $infocard->info_type = $request->info_type;
            if($infocard->save())
            {
                $requestData = request()->all();
                $requestData["info_ID"] =  $infocard->info_ID;
                $filename = time().request()->file('wildlife_pic')->getClientOriginalName();
                $path = request()->file('wildlife_pic')->move('storage/images',$filename);
                $requestData["wildlife_pic"] = $path;
                Wildlife::create($requestData);

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
                ->with('sucess','Reference Added Succesfully');
            }
            else
            {
                return redirect()->back()
                ->with('fail','Infocard Not Saved');
            }
        }
    }//end of adding wildlife

    public function storeDataThesis(Request $request)
    {
         $validator = Validator::make(request()->all(), [
        'thesis_title' => 'required',
        'thesis_author' => 'required',
        'thesis_reference' => 'required',
        'thesis_type' => 'required',
        'date_published' => 'required',
        'date_added' => 'required',
        ]);
        if($validator->fails())
        {
            return redirect()->back()
            ->with('fail','Please Provide All Information');
        }//failed
        else
        {
            $infocard = new Infocard;
            $infocard->info_type = $request->info_type;
            if($infocard->save())
            {
                $requestData = request()->all();
                $requestData["info_ID"] =  $infocard->info_ID;
                thesis_paper::create($requestData);

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
                ->with('sucess','Thesis Paper Added Succesfully');
            }
            else
            {
                return redirect()->back()
                ->with('fail','Infocard Not Saved');
            }    

        }//sucess
        
    }//end of adding thesis

    public function storeDataJournal(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'journal_title' => 'required',
            'journal_author' => 'required',
            'journal_reference' => 'required',
            'journal_desc' => 'required',
            'date_published' => 'required',
            'date_added' => 'required',
            ]);
            if($validator->fails())
            {
                return redirect()->back()
                ->with('fail','Please Provide All Information');
            }
            else
            {
                $infocard = new Infocard;
                $infocard->info_type = $request->info_type;
                if($infocard->save())
                {
                    $requestData = request()->all();
                    $requestData["info_ID"] =  $infocard->info_ID;
                    journal_article::create($requestData);
                    
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
                    ->with('sucess','Journal Article Added Succesfully');
                }
                else
                {
                    return redirect()->back()
                    ->with('fail','Infocard Not Saved'); 
                }
            }//sucess
    }//end of adding journal
}
