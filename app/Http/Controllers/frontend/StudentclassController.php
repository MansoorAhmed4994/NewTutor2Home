<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\ClassStudents;
use App\Models\Classes;
use App\Models\MeetingDetail;

class StudentclassController extends Controller
{

    public function myclass()
    {
    	$studentClass = ClassStudents::with('class','class.meeting')->where('student_id',auth()->user()->id)->get();
    	return view('frontend.student.myclass',compact('studentClass'));
    }

    public function viewclass($class_id)
    {
    	$class = Classes::where('id',$class_id)->first();
    	$classMeeting = MeetingDetail::where('class_id',$class_id)->first();
    	return view('frontend.student.view-class',compact('class','classMeeting'));
    }


}
