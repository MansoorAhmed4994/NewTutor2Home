<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function registration()
    {
    	return view('frontend.student.registration');
    }

    public function login()
    {
    	return view('frontend.student.login');
    }

    public function dashboard()
    {
    	return view('frontend.student.dashboard');
    }

    public function profile()
    {
        return view('frontend.student.profile');
    }

    public function changePassword()
    {
        return view('frontend.student.change-password');
    }
}
