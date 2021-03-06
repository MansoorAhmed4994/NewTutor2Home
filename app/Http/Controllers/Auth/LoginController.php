<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Role;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


   use AuthenticatesUsers;


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    protected function authenticated(Request $request, $user)
    {   
        if(!$user->hasVerifiedEmail()) {
            Auth::logout();
            return redirect('/');
        }elseif ($user->role_id == Role::ADMIN) {
            return redirect()->route('home');
        } 
        elseif($user->role_id == Role::TEACHER) {
            return redirect()->route('teacher-dashboard');
        } 
        elseif($user->role_id == Role::STUDENT) {
            return redirect()->route('student-dashboard');
        } 
        elseif($user->role_id == Role::PARENTS) {
            return redirect()->route('parent-dashboard');
        }

        return redirect('/');
    }

}
