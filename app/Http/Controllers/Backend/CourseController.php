<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Http\Requests\CourseRequest;


class CourseController extends Controller
{
    protected $comp;
	
	function __construct(Course $comp){
		$this->comp = $comp;
	}

    public function index(){
    	$course = $this->comp->getAll();
    	return view('backend.course.index',compact('course'));
    }

    public function create(){
    	return view('backend.course.create');
    }

    public function store(CourseRequest $request){
    	$this->comp->createCourse($request);
    	return redirect()->back()->withStatus(__('successfully Added.'));
    }

    public function edit($id){
    	$course = $this->comp->getById($id);
    	return view('backend.course.edit',compact('course'));
    }

    public function update(CourseRequest $request,$id)
    {
    	$this->comp->updateCourse($request,$id);
    	return redirect(route('courses-list'))->withStatus(__('successfully updated.'));
    }

    public function delete($id)
    {
    	$this->comp->destroyCourse($id);
    	return redirect(route('courses-list'))->withStatus(__('Deleted successfully.'));
    }

}
