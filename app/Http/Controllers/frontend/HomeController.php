<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Role;
use DB;
use App\Models\TeacherSlots;
use App\Models\BookClass;
use Auth;
use Validator;

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

    public function findTutors(Request $request)
    {
       // $teachers = $this->user->getTeachers();
       $teachers = User::where(['role_id'=>Role::TEACHER])->with('teacherSpecialization','qualification');
       $country=$request->get('country');
       $subject=$request->get('subject');
       $level=$request->get('level');
       $price=$request->get('price');
       if(!empty($country)){
        $teachers->where(function ($q) use ($country){
            $q->where('country',$country);
        });
      }
      if ($subject!="") {
        $teachers->whereHas('teacherSpecialization',function($query) use ($subject) {
          $query->where('subject',$subject);
       });
     }
     if ($level!="") {
        $teachers->whereHas('teacherSpecialization',function($query) use ($level) {
          $query->where('level',$level);
       });
     }
     if ($price!="") {
        $teachers->whereHas('qualification',function($query) use ($price) {
          $query->where('Tutor_per_hour',$price);
       });
     }
       $teachers=$teachers->get();
        $countries = DB::table("countries")->pluck("name","id");
        // $Qualification=User::find(Auth::user()->id)->Qualification;
        // $Subject=User::find(Auth::user()->id)->TeacherSpecialization;
        $subjectall=USER::SUBJECT;
        $qualificationall=USER::QUALIFICATION;
        $qualification_type=USER::QUALIFICATIONTYPE;
        $level=USER::LEVEL;
        $rate=USER::HOURRATE;
    	return view('frontend.find-tutors.index',compact('teachers','subjectall','level','rate','countries'));
    }
    public function singleTutor($id)
    {
        
        $teacher = User::where(['id'=>$id,'role_id'=>Role::TEACHER])->first();
        if(!empty( $teacher)){
        // $Qualification=User::find(Auth::user()->id)->Qualification;
        // $Subject=User::find(Auth::user()->id)->TeacherSpecialization;
        $subjectall=USER::SUBJECT;
        $qualificationall=USER::QUALIFICATION;
        $qualification_type=USER::QUALIFICATIONTYPE;
        $level=USER::LEVEL;
        $rate=USER::HOURRATE;
        $teacherslots=TeacherSlots::where('user_id',$id)->get();
        return view('frontend.find-tutors.single_tutor',compact('teacher','subjectall','level','rate','qualification_type','qualificationall','teacherslots'));
        }else{
            return redirect()->route('find-tutors');
        }
    }

    public function BookClass($id)
    {

      $teacher = User::where(['id'=>$id,'role_id'=>Role::TEACHER])->first();
      if(!empty( $teacher)){
      // $Qualification=User::find(Auth::user()->id)->Qualification;
      // $Subject=User::find(Auth::user()->id)->TeacherSpecialization;
      $subjectall=USER::SUBJECT;
      $qualificationall=USER::QUALIFICATION;
      $qualification_type=USER::QUALIFICATIONTYPE;
      $level=USER::LEVEL;
      $rate=USER::HOURRATE;
      $teacherslots=TeacherSlots::where('user_id',$id)->get();
      return view('frontend.find-tutors.Book_class',compact('teacher','subjectall','level','rate','qualification_type','qualificationall','teacherslots'));
      }else{
          return redirect()->route('find-tutors');
      }
    }
    public function savebookclass(Request $request)
    {
      $booker_id=Auth::user()->id;
      $validator = Validator::make($request->all(), [
        'session_name' => 'required',
        'session_date' => 'required',
        'session_time' => 'required',
        'session_hours' => 'required',
        // 'lastName' => 'required|max:20',
        
    ]);
    if ($validator->fails()) {
       return redirect()->back()->withErrors($validator)->withInput();
   }
   try {
    
    $data= $request->all();
    $classinfo=[
     'session_name'=>$data['session_name'],
     'session_date'=>$data['session_date'],
     'session_time' =>$data['session_time'],
     'session_hours'=> $data['session_hours'],
     'teacher_id'   =>$data['teacher_id'],
     'booker_id'   =>$booker_id,
     'amount'     =>$data['amount'],
     'description'     =>$data['description']
     
 ];

 $created =  BookClass::create($classinfo);
 return redirect()->route('payment',$created->id); 
} catch (Exception $e) {
 return redirect()->back()->withErrors([$e->getMessage()]);  
} 


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
    public function forgot_password() {
      return view('frontend.forgot');
  }

    public function termsofservices()
    {
    	return view('frontend.termsofservices');
    }


}
