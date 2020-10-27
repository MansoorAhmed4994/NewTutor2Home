<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
	protected $user;
	function __construct(User $user){
		$this->user = $user;
	}
    
    public function teacherList(){
    	$teachers = $this->user->getTeachers();
    	return view('backend.teacher.index',compact('teachers'));
    }
    
    public function studentList(){
    	$students = $this->user->getStudents();
    	return view('backend.student.index',compact('students'));
    }
    
    public function parentList(){
    	$parents = $this->user->getParents();
    	return view('backend.parent.index',compact('parents'));
    }

    public function activate($id){
      $getUser = $this->user->find($id);
      if ($getUser->email_verified_at) {
	      $getUser->email_verified_at = null;
	      $getUser->save();
      }
      else{
      	  $getUser->email_verified_at =date('Y-m-d H:i:s');
	      $getUser->save();	
      }
      return redirect()->back()->withStatus(__('successfully updated.'));
    }
}
