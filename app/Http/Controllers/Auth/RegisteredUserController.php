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
        //$id = Auth::user()->id;
        $change = User::find($id);
        //$change->password = Hash::make($request->input('changed_pass'));
        $change->password = Hash::make($request->password);
        $change->changed_pass = '1';
        $change->save();         
        return view ('auth.login');

        Auth::login($user);
        
        return redirect(RouteServiceProvider::HOME);  
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
