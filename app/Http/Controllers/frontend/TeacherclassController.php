<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class TeacherclassController extends Controller
{

    public function createclass()
    {
    	return view('frontend.teacher.create-class');
    }

    public function myclass()
    {
    	return view('frontend.teacher.myclass');
    }

    public function editclass()
    {
    	return view('frontend.teacher.edit-class');
    }

    public function viewclass()
    {
    	return view('frontend.teacher.view-class');
    }


}
