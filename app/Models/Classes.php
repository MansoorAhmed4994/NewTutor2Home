<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';
    protected $guarded = [];

    public function meeting()
    {
    	return $this->belongsTo(\App\Models\MeetingDetail::class,'id','class_id');
    }

    public function teacher()
    {
    	return $this->belongsTo(\App\User::class,'teacher_id','id');
    }

}
