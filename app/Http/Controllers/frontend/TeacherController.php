<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\User;
use App\Models\Role;
use Hash;

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
   return view('frontend.teacher.dashboard');
}


public function profile()
{
    return view('frontend.teacher.profile');
}


public function avalibility()
{
    return view('frontend.teacher.avalibility');
}



public function changePassword()
{
    return view('frontend.teacher.change-password');
}

public function stepOne()
{
   return view('frontend.teacher.step-one');
}

public function stepTwo()
{
   return view('frontend.teacher.step-two');
}

public function stepThree()
{
   return view('frontend.teacher.step-three');
}
}
