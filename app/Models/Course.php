<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GeneraicTrait;
use Illuminate\Http\Request;
use File;


class Course extends Model
{
    protected $table = 'courses';
    protected $guarded = ['id'];
    use GeneraicTrait;
    public function getAll(){
    	return $this->get();
    }

    public function createCourse(Request $request){
    	$this->name = $request->name;
    	$this->description = $request->description;
    	$this->duration = $request->duration;
    	$this->price = $request->price;
    	if ($request->has('image_url')) {
    		$file = $request['image_url'];
            $images = $request['image_url']->getClientOriginalName();
            $imageName = $this->SaveImages($images,$file,'course/','',683,768);
            $imagePath = 'course/'.$imageName;
    		$this->image_url = $imagePath;
    	}
    	$this->save();
    	return $this;
    }

    public function getById($id){
    	return $this->findOrfail($id);
    }

    public function updateCourse(Request $request,$id){
    	// dd($request);
    	$course = $this->findOrfail($id);
    	$course->name = $request->name;
    	$course->description = $request->description;
    	$course->duration = $request->duration;
    	$course->price = $request->price;
    	if ($request->has('image_url')) {
    		if (!empty($request->image_url)) {
	    		$file = $request['image_url'];
	            $images = $request['image_url']->getClientOriginalName();
	            $imageName = $this->SaveImages($images,$file,'course/','',683,768);
	            $imagePath = 'course/'.$imageName;
	    		$course->image_url = $imagePath;
    		}
    	}
    	$course->save();
    	return $course;
    }

    public function destroyCourse($id){
    	
    	$course = $this->findOrfail($id);
    	$file_path = storage_path().'/app/'.$course->image_url;
		unlink($file_path);
    	$course->delete();
    	return true;
    }

    public static function coursesCount(){
    	return Course::count();
    }

}
