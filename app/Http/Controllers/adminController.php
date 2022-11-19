<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\user_info;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Redirect; 
use Illuminate\Support\Facades\File;
use DB;


class adminController extends Controller
{
    //for viewing the userAccounts
    public function adminDashboard()
    {
        $user = User::all();
        return view ('IEMS.Linus.ADMIN.adminDashboard')->with('user', $user);
    }//end viewing of admin user accounts dashboard

    public function adminAccounts()
    {
        $userAdmin = User::where('user_type','Admin')->get();
        return view ('IEMS.Linus.ADMIN.displayAdminAcc')->with('user', $userAdmin);
    }//end viewing of admin user accounts dashboard

    public function adminFacultyAccounts()
    {
        $userFaculty = User::where('user_type','Faculty')->get();
        return view ('IEMS.Linus.ADMIN.displayFacultyAcc')->with('user', $userFaculty);
    }//end viewing of admin user accounts dashboard

    public function adminStudentAccounts()
    {
        $userStudent = User::where('user_type','Student')->get();
        return view ('IEMS.Linus.ADMIN.displayStudentAcc')->with('user', $userStudent);
    }//end viewing of admin user accounts dashboard

    //for storing userInformation And Register
    public function storeUserInfo(Request $request)
    {
            $validator = Validator::make($request->all(), [
            'middle_name' => 'required',
            'last_name' => 'required',
            'name' => 'required',
            'rank' => 'required',
            'specialty' => 'required',
            'educational' => 'required',
            'phone_no' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'user_type' => 'required',
            ]);

                    $user = [
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                        'user_type' => $request->user_type,
                    ];
                    User::create($user);
                    $id = DB::table("users")->select("id")->orderBy('id','desc')->value('id');

                    if($request->hasfile('profile_pic'))
                    {
                        
                        $file = $request->file('profile_pic');
                        $extention = $file->getClientOriginalExtension();
                        $filename = time(). '.'.$extention;
                        $file->move('storage/images',$filename);
                    $userInfo = [
                        'name' => $request->name,
                        'middle_name' => $request->middle_name,
                        'last_name' => $request->last_name,
                        'rank'=> $request-> rank,
                        'specialty'=> $request->specialty,
                        'educational'=> $request->educational,
                        'phone_no'=> $request->phone_no,
                        'profile_pic' =>  $filename,
                        'user_ID' => $id,
                    ];
                    }
                    else
                    {
                        $userInfo = [
                            'name' => $request->name,
                            'middle_name' => $request->middle_name,
                            'last_name' => $request->last_name,
                            'rank'=> $request-> rank,
                            'specialty'=> $request->specialty,
                            'educational'=> $request->educational,
                            'phone_no'=> $request->phone_no,
                            'user_ID' => $id,
                        ];
                    }
                    user_info::create($userInfo);
                    $user = User::all();
                    return view ('IEMS.Linus.ADMIN.adminDashboard')->with('user', $user);

            event(new Registered($user));
    }//end of adding userInformation

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $input = $request->all();
        $user->update($input);
        $user = User::all();
        return view ('IEMS.Linus.ADMIN.adminDashboard')->with('user', $user);
    }//end of updating users table

    public function deleteUser($id)
    {
        User::destroy($id);
        $user = User::all();
        return view ('IEMS.Linus.ADMIN.adminDashboard')->with('user', $user);
    }//end of deleting user accounts

    public function Aprofile()
    {
        $profile = DB::table('users')
        ->where('users.id', '=' , Auth::user()->id )
        ->join('user_info','user_info.user_ID', "=" ,'users.id')
        ->select('user_info.*','users.email')
        ->get();

        return view ('IEMS.Linus.ADMIN.AProfileView')
        ->with('profile',$profile);
    }

    public function editAprofile(Request $request, $id)
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
        return redirect()->route('Aprofile')
        ->with('user', $user)
        ->with('profile',$profile);
    }
    
}
