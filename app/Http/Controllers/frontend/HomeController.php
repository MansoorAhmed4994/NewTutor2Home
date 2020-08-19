<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    protected $user;

    public function __construct() {
        $this->user = new User;
    }

    public function index()
    {
    	return view('frontend.index');
    }

    public function findTutors()
    {
        $teachers = $this->user->getTeachers();
    	return view('frontend.find-tutors.index',compact('teachers'));
    }

    public function becomeTutors()
    {
    	return view('frontend.become-tutor.index');
    }

    public function login()
    {
    	return view('frontend.login');
    }

    public function signup()
    {
    	return view('frontend.signup');
    }


}
