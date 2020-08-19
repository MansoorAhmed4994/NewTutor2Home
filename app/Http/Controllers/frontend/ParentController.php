<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function registration()
    {
    	return view('frontend.parent.registration');
    }

    public function login()
    {
    	return view('frontend.parent.login');
    }

    public function dashboard()
    {
    	return view('frontend.parent.dashboard');
    }

    public function profile()
    {
        return view('frontend.parent.profile');
    }

    public function changePassword()
    {
        return view('frontend.parent.change-password');
    }
}
