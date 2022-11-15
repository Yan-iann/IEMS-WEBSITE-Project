<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Infocard;
use App\Models\Wildlife;
use App\Models\thesis_paper;
use App\Models\journal_article;
use Illuminate\Support\Facades\Redirect;  
use DB;
class allInfocardMaintain extends Controller
{
    
    public function storeDataWildlife(Request $request)
    {
         $validator = Validator::make(request()->all(), [
        'wildlife_name' => 'required',
        'wildlife_scientific_name' => 'required',
        'wildlife_desc' => 'required',
        'wildlife_pic' => 'required',
        'wildlife_status' => 'required',
        'wildlife_type' => 'required',
        'info_type' => 'required',
        ]);
    
        if($validator->fails())
        {
        return back()->withErrors($validator)->withInput()->with('error','Something went wrong. Please try again.');
        }
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
                return view ('IEMS.Linus.FACULTY.wildlife')
                ->with('wildlifes', $wildlife)
                >with('searchClass', $searchClass)
                ->with('searchSpecie', $searchSpecie)
                ->with('searchLoc', $searchLoc);
            }
        }
    }//end of adding wildlife

    public function storeDataBone(Request $request)
    {
         $validator = Validator::make(request()->all(), [
        'wildlife_name' => 'required',
        'wildlife_scientific_name' => 'required',
        'wildlife_desc' => 'required',
        'wildlife_pic' => 'required',
        'wildlife_status' => 'required',
        'wildlife_type' => 'required',
        'info_type' => 'required',
        ]);
    
        if($validator->fails())
        {
        return back()->withErrors($validator)->withInput()->with('error','Something went wrong. Please try again.');
        }
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
                $wildlife = Wildlife::where('wildlife_type','Bone')->get();
                return view ('IEMS.Linus.FACULTY.boneCollection')->with('wildlifes', $wildlife);
            }
        }
    }//end of adding bone

    public function storeDataRef(Request $request)
    {
         $validator = Validator::make(request()->all(), [
        'wildlife_name' => 'required',
        'wildlife_scientific_name' => 'required',
        'wildlife_desc' => 'required',
        'wildlife_pic' => 'required',
        'wildlife_status' => 'required',
        'wildlife_type' => 'required',
        'info_type' => 'required',
        ]);
    
        if($validator->fails())
        {
        return back()->withErrors($validator)->withInput()->with('error','Something went wrong. Please try again.');
        }
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
                $wildlife = Wildlife::where('wildlife_type','Reference')->get();
                return view ('IEMS.Linus.FACULTY.refCollection')->with('wildlifes', $wildlife);
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
        'thesis_status' => 'required',
        'info_type' => 'required',
        ]);
    
        if($validator->fails())
        {
        return back()->withErrors($validator)->withInput()->with('error','Something went wrong. Please try again.');
        }
        else
        {
            $infocard = new Infocard;
            $infocard->info_type = $request->info_type;
            if($infocard->save())
            {
                $requestData = request()->all();
                $requestData["info_ID"] =  $infocard->info_ID;
                thesis_paper::create($requestData);

                $searchData = DB::table('thesis_paper')
                ->select('thesis_paper.thesis_type','thesis_paper.thesis_reference')
                ->distinct('thesis_paper.thesis_type','thesis_paper.thesis_reference')
                ->get();
        
                $thesis = thesis_paper::all();
                return view('IEMS.Linus.FACULTY.thesis')
                ->with('thesis',$thesis)
                ->with('searchData',$searchData);
            }     
        }
    }//end of adding thesis

    public function storeDataJournal(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'journal_title' => 'required',
            'journal_author' => 'required',
            'journal_reference' => 'required',
            'journal_desc' => 'required',
            'date_published' => 'required',
            'journal_status' => 'required',
            'info_type' => 'required',
            ]);
        
            if($validator->fails())
            {
            return back()->withErrors($validator)->withInput()->with('error','Something went wrong. Please try again.');
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
                    
                    $searchData = DB::table('journal_article')
                    ->select('journal_article.journal_reference','journal_article.date_published')
                    ->distinct('journal_article.journal_reference','journal_article.date_published')
                    ->get();
            
                    $journal = journal_article::all();
                    return view('IEMS.Linus.FACULTY.journal')
                    ->with('journal',$journal)
                    ->with('searchData',$searchData);
                }
            }
    }//end of adding journal
}
