<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class StudentclassController extends Controller
{

    public function myclass()
    {
    	return view('frontend.student.myclass');
    }

    public function viewclass()
    {
    	return view('frontend.student.view-class');
    }


}
