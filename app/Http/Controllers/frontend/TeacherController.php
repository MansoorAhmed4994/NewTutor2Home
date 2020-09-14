<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\User;
use App\Models\Role;
use App\Models\Qualification;
use App\Models\TeacherSlots;
use App\Models\TeacherSpecialization;
use Hash;
use DB;
use Auth;
use Input;

class TeacherController extends Controller
{
    public function registration()
    {
    	return view('frontend.teacher.registration');
    }

    public function testing()
    {
        return view('frontend.teacher.testing');
    }

    public function viewprofile()
    {

        $countries = DB::table("countries")
		->pluck("name","id");
        $cities = DB::table("cities")
		->pluck("name","id");
        $states = DB::table("states")
		->pluck("name","id");
       $experience=USER::EXPERIENCE;
       $social=USER::SOCIAL;
     
   return view('frontend.teacher.updateprofile',compact('countries','cities','states','experience','social'));
      
    }
    public function updateQualification()
    {

        $qualification=USER::QUALIFICATION;
        $qualification_type=USER::QUALIFICATIONTYPE;
        $classtype=USER::CLASSTYPE;
        $licence=USER::LICENCE;
        $hourrate=USER::HOURRATE;
        $result=User::find(Auth::user()->id)->Qualification;
       return view('frontend.teacher.updateQualification',compact('qualification','qualification_type','classtype','licence','hourrate','result'));
      
    }
    public function updateSubject()
    {

        $subject=USER::SUBJECT;
        $level=USER::LEVEL;
        $weekdays=USER::WEEKDAYS;
        $TeacherSlots=User::find(Auth::user()->id)->TeacherSlots;
  $result=User::find(Auth::user()->id)->TeacherSpecialization;
       return view('frontend.teacher.updateSubject',compact('subject','level','weekdays','result'));
      
    }
    public function insertTeacher(Request $request)
    {
    	
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'password' => 'required|confirmed',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|max:11',
            'terms_agree' => 'required',
            // 'lastName' => 'required|max:20',
            
        ]);
        if ($validator->fails()) {
           return redirect()->back()->withErrors($validator)->withInput();
       }
       try {
        
        $data= $request->all();
        $password=Hash::make($data['password']);
        $userInfo=[
         'name'=>$data['first_name']." ".$data['last_name'],
         'email'=>$data['email'],
         'email_verified_at' => date('Y-m-d H:i:s'),
         'password' => $password,
         'role_id'      => Role::TEACHER,
         'phone_number'     =>$data['phone']
         
     ];
     $created =  User::create($userInfo);
     return redirect()->back()->with('success', 'Thank you for register'); 
 } catch (Exception $e) {
     return redirect()->back()->withErrors([$e->getMessage()]);  
 } 
 
}

public function login()
{
   return view('frontend.teacher.login');
}

public function dashboard()
{

  $TeacherSlots=User::find(Auth::user()->id)->TeacherSlots;
  $Qualification=User::find(Auth::user()->id)->Qualification;
  $TeacherSpecialization=User::find(Auth::user()->id)->TeacherSpecialization;
   $postal_code = Auth::user()->postal_code;
   if(empty($postal_code)){
    return redirect()->route('teacher-step-one');
   }else if(empty($Qualification)){
    return redirect()->route('teacher-step-two');
   }else if(empty($TeacherSpecialization) || empty($TeacherSlots)){
    return redirect()->route('teacher-step-three');
   }
   return view('frontend.teacher.dashboard');
}


public function profile()
{
    $Qualification=User::find(Auth::user()->id)->Qualification;
    $Subject=User::find(Auth::user()->id)->TeacherSpecialization;
    $subjectall=USER::SUBJECT;
    $qualificationall=USER::QUALIFICATION;
    $qualification_type=USER::QUALIFICATIONTYPE;
    $classtype=USER::CLASSTYPE;
    return view('frontend.teacher.profile',compact('Qualification','Subject','subjectall','qualificationall','qualification_type','classtype'));
}


public function avalibility()
{
   // $teacherSlots=TeacherSlots::where('user_id',Auth::user()->id)->get();
   $teacherslots=TeacherSlots::where('user_id',Auth::user()->id)->get();
   $rate=USER::HOURRATE;
    return view('frontend.teacher.avalibility',compact('teacherslots','rate'));
}



public function changePassword()
{
    return view('frontend.teacher.change-password');
}
public function updatePassword(Request $request) {
   
    $user_id = Auth::user()->id;
        $rules = array(
            'old_password' => 'required',
            'password' => 'required|confirmed',
            //'password_confirmation' => 'required_with:password|min:6',
        );
    $validator = Validator::make($request->all(), $rules);
   
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
            $user = User::findOrFail($user_id);
            $data = $request->all();
           //dd($data);
            // array_forget($data, 'password_confirmation');
            // array_forget($data, 'old_password');
            // array_forget($data, '_token');
            // array_forget($data, 'search');
            $data['password'] = bcrypt($request->password);
    
            $user->update($data);
            return redirect()->back()->with('success', 'Your password has been changed.');
           
} 

public function stepOne()
{

         $countries = DB::table("countries")
		->pluck("name","id");
        $cities = DB::table("cities")
		->pluck("name","id");
        $states = DB::table("states")
		->pluck("name","id");
       $experience=USER::EXPERIENCE;
       $social=USER::SOCIAL;
     
   return view('frontend.teacher.step-one',compact('countries','cities','states','experience','social'));
}

public function stepOneSave(Request $request)
{
  
    $user_id = Auth::user()->id;
    $rules = array(
        'name' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       
    );
$validator = Validator::make($request->all(), $rules);

if ($validator->fails()) {
    return redirect()->back()->withErrors($validator)->withInput();
}


if ($request->hasFile('image')) {
    $imageName = time().'.'.request()->image->getClientOriginalExtension();
    request()->image->move(public_path('images'), $imageName);
}

        $user = User::findOrFail($user_id);
        $data = $request->all();
        $data['work_in_uk'] =$request->work_in_uk;
        $data['country'] =$request->country;
        $data['state'] =$request->state;
        $data['city'] =$request->city;
        $data['postal_code'] =$request->postal_code;
        $data['nationality'] =$request->nationality;
        $data['phone_no'] =$request->phone_no;
        $data['gender'] =$request->gender;
        $data['dob'] =$request->dob;
        $data['description'] =$request->description;
        $data['image'] =$imageName;
      //  dd($data);

        $user->update($data);
        if(isset($request->profile)){
            return redirect()->route('teacher-profile');
        }else{
         return redirect()->route('teacher-step-two');
      }
}


public function stepTwo()
{
    $qualification=USER::QUALIFICATION;
    $qualification_type=USER::QUALIFICATIONTYPE;
    $classtype=USER::CLASSTYPE;
    $licence=USER::LICENCE;
    $hourrate=USER::HOURRATE;
   return view('frontend.teacher.step-two',compact('qualification','qualification_type','classtype','licence','hourrate'));
}
public function stepTwoSave(Request $request)
{

    
    $user_id = Auth::user()->id;
    $rules = array(
        'cv' => 'required|max:10000|mimes:doc,docx,pdf' ,
       
    );
    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
  
    $data= $request->all();
    if ($request->hasFile('cv')) {
        $imageName = time().'.'.request()->cv->getClientOriginalExtension();
        request()->cv->move(public_path('cv'), $imageName);
    }
    
   
    $userInfo=[
     'class_type'=>$data['class_type'],
     'qualification_type'=>$data['qualification_type'],
     'subject'=>$data['subject'],
     'license'=>$data['license'],
     'Tutor_per_hour'=>$data['Tutor_per_hour'],
     //'level'=>$data['level'],
     'cv'  =>$imageName,
     'user_id' =>$user_id
     
 ];
 $created =  Qualification::updateOrCreate([
    'user_id' =>$user_id],$userInfo);
    if(isset($request->profile)){
        return redirect()->route('teacher-profile');
    }else{
 return redirect()->route('teacher-step-three');
    }

}


public function stepThree()
{
    $subject=USER::SUBJECT;
    $level=USER::LEVEL;
    $weekdays=USER::WEEKDAYS;
    
   return view('frontend.teacher.step-three',compact('subject','level','weekdays'));
}


public function stepThreeSave(Request $request)
{
    $user_id = Auth::user()->id;
    $rules = array(
        'subject' => 'required' ,
        'level' => 'required' ,
       
    );
    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    $data= $request->all(); 
    $special=['subject'=>$data['subject'],
                'level'=> $data['level'],
                'user_id'=>$user_id
        ]; 
        TeacherSpecialization::updateOrCreate([
            'user_id' =>$user_id],$special);
            if(isset($request->profile)){
                return redirect()->route('teacher-profile');
            }else{

        for($i=0;$i<=count($data['daysTime'])-1;$i++){
            $ndata=explode("-",$data['daysTime'][$i]);
            $timeslots=['time'=>$ndata[0],
            'days'=>$ndata[1],
            'user_id'=>$user_id
            ];
            TeacherSlots::updateOrCreate(['time'=>$ndata[0],
            'days'=>$ndata[1],
            'user_id'=>$user_id],$timeslots);
        }
        return redirect()->route('teacher-dashboard');
   }

}    
}
