<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\user_info;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Redirect; 
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;


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
            'name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'regex:/(.*)@su.edu.ph/i'],
            'password' => [
                'required', 
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
            ],
            'email.regex' => ['Email must be a SU Email'],
            ]);
            if($validator->fails())
            {
                return redirect()->back()
                ->with('fail','Creating Account Failed. Please try again');
            }//if failed return back
            else
            {
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
                    return redirect()->route('adminDashboard')
                    ->with('sucess','Student User Account Successfully Created')
                    ->with('user', $user);
                    event(new Registered($user));  
            }//if sucessful   
    }//end of adding userInformation

    //for faculty
    public function storeUserFaculty(Request $request)
    {
            $validator = Validator::make($request->all(), [
            'name' => 'required',
            'last_name' => 'required',
            'educational' => 'required',
            'rank' => 'required',
            'specialty' => 'required',
            'phone_no' => 'required',
            'email' => ['required', 'string','max:255', 'unique:users','regex:/(.*)@su.edu.ph/i'],
            'password' => [
                'required', 
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
            ],
            'email.regex' => 'Email must be a SU Email',
            ]);
            if($validator->fails())
            {
                return redirect()->back()
                ->with('fail','Creating Account Failed. Please fill all the textfields');
            }//if failed return back
            else
            {
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
                        if($request->hasfile('profile_pic'))
                        {
                            $filename = time().request()->file('profile_pic')->getClientOriginalName();
                            $finalPath = request()->file('profile_pic')->move('storage/images',$filename);
                            $userInfo = [
                                'name' => $request->name,
                                'middle_name' => $request->middle_name,
                                'last_name' => $request->last_name,
                                'rank'=> $request-> rank,
                                'specialty'=> $request->specialty,
                                'educational'=> $request->educational,
                                'phone_no'=> $request->phone_no,
                                'profile_pic' =>  $finalPath,
                                'user_ID' => $id,
                            ];
                        }
                    } //if have picture
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
                    }//if walay picture
                        user_info::create($userInfo);
                        $user = User::all();
                        return redirect()->route('adminDashboard')
                        ->with('sucess','Faculty User Account Successfully Created')
                        ->with('user', $user);
                        event(new Registered($user));

            }//successful    
    }//end of adding faculty userInformation

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $input = $request->all();
        $user->update($input);
        $user = User::all();
        return redirect()->back()
        ->with('sucess','Account Succesfully Updated');
    }//end of updating users table

    public function deleteUser($id)
    {
        User::destroy($id);
        $user = User::all();
        return redirect()->back()
        ->with('user', $user)
        ->with('sucess','Account Succesfully Deleted');
    }//end of deleting user accounts

    public function Aprofile()
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

        return view ('IEMS.Linus.ADMIN.AProfileView')
        ->with('profile',$profile)
        ->with('password',$password);
    }

    public function editAprofile(Request $request, $id)
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

                return redirect()->route('Aprofile')
                ->with('profile',$profile)
                ->with('sucess','Profile Updated Successfully');
            }//sucess
    }

    public function updatePassAdmin(Request $request, $id)
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
                return redirect()->route('Aprofile')
                    ->with('sucess','New Password Updated');
                
            }
    }
   
    public function searchFaculty(Request $request)
    {
        $user = User::where('user_type','Faculty')->get();

        if($request->searchFaculty)
        $user = User::where('name','LIKE','%'.$request->searchFaculty.'%')
               ->where('user_type','Faculty')
               ->get();

        return view('IEMS.Linus.ADMIN.searchFacultyUser')
        ->with('user', $user);
    }
    public function searchStudent(Request $request)
    {
        $user = User::where('user_type','Student')
                    ->get();
        if($request->searchStudent)
        $user = User::where('name','LIKE','%'.$request->searchStudent.'%')
                            ->where('user_type','Student')
                            ->get();
        return view('IEMS.Linus.ADMIN.searchStudentUser')
        ->with('user', $user);
    }

    public function resetPasswordFaculty(Request $request, $id)
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
                $change->changed_pass = '0';
                $change->save(); 
                return redirect()->route('adminFacultyAccounts')
                    ->with('sucess','Password Reset Succesfully');
                
            }
    }

    public function resetPasswordStudent(Request $request, $id)
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
                $change->changed_pass = '0';
                $change->save(); 
                return redirect()->route('adminStudentAccounts')
                    ->with('sucess','Password Reset Succesfully');
                
            }
    }
    
}
