<?php

namespace App\Http\Controllers\Auth;

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
use DB;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
        
    }

    public function updatePass(Request $request, $id)
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
                if(Auth::user()->user_type == 'Admin')
                {
                        return redirect()->route('adminDashboard')
                        ->with('sucess','New Password Updated');
                }
                else if(Auth::user()->user_type == 'Faculty')
                {
                   
                        return redirect()->route('facultyDashboard')
                        ->with('sucess','New Password Updated'); 
                }
                else if(Auth::user()->user_type == 'Student')
                {
                    
                        return redirect()->route('studentDashboard')
                        ->with('sucess','New Password Updated'); 
                }
            }
    }

    public function firstTime()
    {
        $profile = DB::table('users')
        ->where('users.id', '=' , Auth::user()->id )
        ->select('users.*')
        ->get();
        
         return view('auth.firstTimeLogin')
         ->with('profile',$profile);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'middle_name' => 'required',
            'last_name' => 'required',
            'name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'user_type' => 'required',
            ]);

            if($validator->fails())
            {
            return back()->withErrors($validator)->withInput()->with('error','Something went wrong. Please try again.');
            }
            else
            {
                    $user = [
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                        'user_type' => $request->user_type,
                    ];
                    User::create($user);
                    $id = DB::table("users")->select("id")->value('id');
                    $userInfo = [
                        'name' => $request->name,
                        'middle_name' => $request->middle_name,
                        'last_name' => $request->last_name,
                        'user_ID' => $id,
                    ];
                    user_info::create($userInfo);
                    $user = User::all();
                    return view ('auth.login');
            }

        event(new Registered($user));

        Auth::login($user);
        
        return redirect(RouteServiceProvider::HOME);
    }
}
