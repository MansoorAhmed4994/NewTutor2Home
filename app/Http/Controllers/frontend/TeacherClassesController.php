<?php

namespace App\Http\Controllers\frontend;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class TeacherClassesController extends Controller
{
 
    public function CreatClass()
    {
    	return view('frontend.teacher.classes.create');
    }

    public function CreatClassStore(Request $request)
    {
        $host_email = 'mansoor.zaheer994@gmail.com';
        $host_id = 'P91U2RijTH-Cse6-jvi7mw';
        $datepicker = $request->date;
        $timepicker = $request->time;
        $timeformatepicker = 'YYYY-MM-dd';
        $start_time = $datepicker.' '.$timepicker.' '.$timeformatepicker;
        $body = [
			'topic' => $request->topic,
            'type' => 2,
            'email' => $host_email,
			'start_time' => $start_time,
			'password' => '',
			'agenda' => $request->agenda,
            'timezone' => $request->timezone,
            'duration' => $request->duration
		];
        $zoom = app('zoom');
        $meeting_details = $zoom->createMeeting($host_id,$body);
        
        Mail::send('frontend.teacher.classes.createClassemail',['meeting_details' => $meeting_details] , function ($message) {
            //$message->from('mansoor_zaheer994@hotmail.com', 'Laravel');        
            $message->to('mansoor.zaheer994@gmail.com')->cc('mansoor.zaheer994@gmail.com');
        });
        

    	return view('frontend.teacher.classes.create');
    }

    public function ListClass()
    {
    	return view('frontend.teacher.classes.list');
    }

    public function EditClass()
    {
    	return view('frontend.teacher.classes.edit');
    }

    public function ViewClass()
    {
    	return view('frontend.teacher.classes.view');
    }


}
