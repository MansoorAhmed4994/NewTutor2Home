<?php

namespace App\Http\Controllers\frontend;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Auth;
use App\Models\BookClass;
use App\Models\Classes;
use App\Models\ClassStudents;
use App\Models\MeetingDetail;
use Validator;

class TeacherClassesController extends Controller
{
 
    public function CreatClass()
    {
        $teacherdata = bookclass::where('teacher_id', '=', Auth::user()->id)
                ->leftJoin('users as u', 'bookclass.booker_id' ,'=','u.id' )
                ->select('u.*')
                ->get();
        return view('frontend.teacher.classes.create',compact('teacherdata'));
    }

    public function CreatClassStore(Request $request)
    {

         $validator = Validator::make($request->all(), [
            'date' => 'required',
            'topic' => 'required',
            'time' => 'required',
            'agenda' => 'required',
            'time_zone' => 'required',
            'duration' => 'required',
            'student_id' => 'required',
            'student_id.*' => 'required',
            // 'lastName' => 'required|max:20',
            
        ]);
        if ($validator->fails()) {
           return redirect()->back()->withErrors($validator)->withInput();
       }
            try {
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
            // Mail::send('frontend.teacher.classes.createClassemail',['meeting_details' => $meeting_details] , function ($message) {
            //     //$message->from('mansoor_zaheer994@hotmail.com', 'Laravel');        
            //     $message->to('mansoor.zaheer994@gmail.com')->cc('mansoor.zaheer994@gmail.com');
            // });
             $saveClass= [
                 'topic' => $request->topic,
                 'teacher_id' => auth()->user()->id,
                 'start_date' => $request->date,
                 'start_time' => $request->time,
                 'agenda' => $request->agenda,
                 'timezone' => $request->time_zone,
                 'duration' => $request->duration
             ];

             $created =  Classes::create($saveClass);
             if(isset($request->student_id)){
                for ($i=0; $i <=count($request->student_id)-1 ; $i++) { 
                    $studentsData=$request->student_id[$i];
                    $students=User::where('id', $studentsData)->first();
                    $savestudents= [
                        'student_id' => $students->id,
                        'class_id' =>$created->id,
                    ];
                    ClassStudents::create($savestudents);
                }
            }
            $savemettingdetail= [
             'class_id' => $created->id,
             "uuid" => $meeting_details['uuid'],
                "metting_id" =>$meeting_details['id'] ,  //this is id 
                "host_id" => $meeting_details['host_id'],
                "host_email" => $meeting_details['host_email'],
                "topic" => $meeting_details['topic'],
                "type" => $meeting_details['type'],
                "status" => $meeting_details['status'],
                "start_time" => $meeting_details['start_time'],
                "duration" => $meeting_details['duration'],
                "timezone" => $meeting_details['timezone'],
                "created_at_metting" => $meeting_details['created_at'],
                "start_url" => $meeting_details['start_url'],
                "join_url" => $meeting_details['join_url'],
                "password" => $meeting_details['password'],
                "h323_password" => $meeting_details['h323_password'],
                "pstn_password" => $meeting_details['pstn_password'],
                "encrypted_password" => $meeting_details['encrypted_password'],
                "code" =>$meeting_details['code']
            ];
            MeetingDetail::create($savemettingdetail);
            return redirect()->back()->with('success', 'class sucessfully created');
        } catch (Exception $e) {
            return redirect()->back()->withErrors([$e->getMessage()]);  
        } 
        
    }

    public function ListClass()
    {
        $teacherClasses = Classes::where('teacher_id',auth()->user()->id)->get();
        return view('frontend.teacher.classes.list',compact('teacherClasses'));
    }

    public function EditClass()
    {
        return view('frontend.teacher.classes.edit');
    }

    public function ViewClass($id)
    {
        $classData = Classes::where('id',$id)->first();
        $classStudents = ClassStudents::with('students')->where('class_id',$id)->get();
        return view('frontend.teacher.classes.view',compact('classData','classStudents'));
    }

    public function deleteClass($id)
    {
         Classes::where('id',$id)->delete();
         ClassStudents::where('class_id',$id)->delete();
         MeetingDetail::where('class_id',$id)->delete();
        return redirect()->back()->with('success', 'class sucessfully deleted');
    }


}
