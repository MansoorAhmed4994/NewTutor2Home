<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\User;
use App\Models\Role;
use Hash;
use Auth;

class StudentController extends Controller
{
    public function registration()
    {
    	return view('frontend.student.registration');
    }
    public function insertStudent(Request $request)
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
         'role_id'      => Role::STUDENT,
         'phone_number'     =>$data['phone']
         
     ];
     $created =  User::create($userInfo);
     Auth::login($created) ;
     if($created){
       return redirect('student/dashboard') ;
       //->with('message','Check Your Email For Login Credentials') ;
     }
 } catch (Exception $e) {
     return redirect()->back()->withErrors([$e->getMessage()]);  
 } 
 
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
public function updateprofile(Request $request) {
   
      $user_id = Auth::user()->id;
        $rules = array(
            'name' => 'required',
            //'password_confirmation' => 'required_with:password|min:6',
        );
    $validator = Validator::make($request->all(), $rules);
   
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
  
 
            $user = User::findOrFail($user_id);
            $data = $request->all();
            $data['name'] =$request->name;
            $data['gender'] =$request->gender;
            $data['phone'] =$request->phone;
            $data['dob'] =$request->dob;
            if ($request->hasFile('image')) {
                $imageName = time().'.'.request()->image->getClientOriginalExtension();
                request()->image->move(public_path('images'), $imageName);
                $data['image'] =$imageName;
            }

            $user->update($data);
            return redirect()->back()->with('success', 'profile has been updated.');
           

}   

    public function login()
    {
    	return view('frontend.student.login');
    }

    public function dashboard()
    {
    	return view('frontend.student.dashboard');
    }

    public function profile()
    {
        return view('frontend.student.profile');
    }

    public function changePassword()
    {
        return view('frontend.student.change-password');
    }
}
