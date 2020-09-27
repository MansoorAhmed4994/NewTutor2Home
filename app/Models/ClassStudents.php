<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassStudents extends Model
{
    protected $table = 'class_students';
    protected $guarded = [];

    public function students()
    {
    	return $this->belongsTo(\App\User::class,'student_id','id');
    }

    public function class()
    {
    	return $this->belongsTo(\App\Models\Classes::class,'class_id','id');
    }
}
