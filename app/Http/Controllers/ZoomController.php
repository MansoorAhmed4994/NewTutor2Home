<?php

namespace App\Http\Controllers;
use App\Models\Provider;
use Illuminate\Http\Request;

class ZoomController extends Controller
{
    //

    function index()
    {
        $datepicker = '20/11/2020';
        $timepicker = '10:00 AM';
        $timeformatepicker = 'YYYY-MM-dd';
        $start_time = $datepicker.' '.$timepicker.' '.$timeformatepicker;
        $body = [
			'topic' => 'testi topic',
            'type' => 2,
            'email' => 'mansoor.zaheer994@gmail.com',
			'start_time' => $start_time,
			'password' => '',
			'agenda' => 'checking',
            'timezone' => '',
            'duration' => 60
		];
        $zoom = app('zoom');
        // dd($zoom->createMeeting('P91U2RijTH-Cse6-jvi7mw',$body));
        
        dd($zoom->getMeeting('72357422976'));
        // dd($zoom->getMeetings('P91U2RijTH-Cse6-jvi7mw'));
        //dd($zoom->createUser("mansoor@yopmail.com", "123", "testing", "test"));
        //dd($zoom->getUsers()['users']);
        dd($zoom->getMeetings('P91U2RijTH-Cse6-jvi7mw'));
        
    }
}
