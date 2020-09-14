<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\User;
use App\Models\Role;
use Hash;
use Auth;
use array_forget;

class ParentController extends Controller
{
    public function registration()
    {
    	return view('frontend.parent.registration');
    }

    public function login()
    {
    	return view('frontend.parent.login');
    }

    public function insertParent(Request $request)
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
         'role_id'      => Role::PARENTS,
         'phone_number'     =>$data['phone']
         
     ];
     $created =  User::create($userInfo);
     Auth::login($created) ;
     if($created){
       return redirect('parent/dashboard') ;
       //->with('message','Check Your Email For Login Credentials') ;
     }
 } catch (Exception $e) {
     return redirect()->back()->withErrors([$e->getMessage()]);  
 } 
 
}
    public function dashboard()
    {
    	return view('frontend.parent.dashboard');
    }

    public function profile()
    {
        return view('frontend.parent.profile');
    }

    public function changePassword()
    {
        return view('frontend.parent.change-password');
    }

    public function updatePassword(Request $request) {
   
        $user_id = Auth::user()->id;
            $rules = array(
                'old_password' => 'required',
                'password' => 'required|confirmed',
               
            );
        $validator = Validator::make($request->all(), $rules);
       
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
                $user = User::findOrFail($user_id);
                $data = $request->all();
        
                $data['password'] = bcrypt($request->password);
        
                $user->update($data);
                return redirect()->back()->with('success', 'Your password has been changed.');
               
    } 
    public function updateprofile(Request $request) {
       
          $user_id = Auth::user()->id;
            $rules = array(
                'name' => 'required',
               
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
                $user->update($data);
                return redirect()->back()->with('success', 'profile has been updated.');
               
    
    }   
    



}
