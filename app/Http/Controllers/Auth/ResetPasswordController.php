<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Auth;
use App\Models\Role;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
  //  protected $redirectTo ="/";
    protected function redirectTo()
{
    $user=Auth::user();
    if($user->role->id == Role::TEACHER) {
        $this->redirectTo = 'teacher/dashboard';
        return $this->redirectTo;
      //  return redirect()->route('teacher-dashboard');
    } 
    
    if($user->role->id == Role::STUDENT) {
        $this->redirectTo = 'student/dashboard';
        return $this->redirectTo;
    } 
  
    if($user->role->id == Role::PARENTS) {
        $this->redirectTo = 'parent/dashboard';
        return $this->redirectTo;
    }
    // if($user->account_type == 1){
    //     return '/admin';
    // }else{
    //     return '/home';
    // }

}
}
