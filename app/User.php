<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id','phone_number','image','email_verified_at','gender','dob','work_in_uk','country','state','city',
        'postal_code','nationality','description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getTeachers(){
        $query = $this;
        $query = $query->where('role_id',Role::TEACHER)->get();
        return $query;
    }
        
    public function role() {
        return $this->belongsTo('App\Models\Role');
    }
    public function qualification() {
        return $this->belongsTo(\App\Models\Qualification::class,'id', 'user_id');
    }
    public function teacherSlots() {
        return $this->belongsTo(\App\Models\TeacherSlots::class,'id', 'user_id');
    }
    public function teacherSpecialization() {
        return $this->belongsTo(\App\Models\TeacherSpecialization::class,'id', 'user_id');
    }
 
    const PERCENT="20%";
    const WEEKDAYS=[
        1 => 'Mon',
        2 => 'Tue',
        3 => 'Wed',
        4 => 'Thu',
        5 => 'Fri',
        6 => 'Sat',
        7 => 'Sun'
    ];
    const SOCIAL=[
        '0' => 'Facebook',
        '1' => 'Twitter',
        '2' => 'Instagram',
        '3' => 'Google'
    ];
    const EXPERIENCE=[
        '0' => '0 - 1 Year',
        '1' => '1 - 2 Year',
        '2' => '2 - 3 Year',
        '3' => '3 - 4 Year',
        '4' => '4 - 5 Year',
        '5' => '5 - 6 Year',
        '6' => '6 - 7 Year',
        '7' => '7 - 8 Year',
        '8' => '8 - 9 Year',
        '9' => '9 - 10 Year',
        '10' => '10+ Year'
    ];
    const QUALIFICATION=[
        '0' => 'PGC Primary',
        '1' => 'PGC Secondary',
    ];
    const  QUALIFICATIONTYPE=[
        '0' => 'Under Graduate',
        '1' => 'Graduate',
        '2' => 'Post Graduate',
        '3' => 'Goovgle'
    ];
       const CLASSTYPE=[
        '0' => 'Physical Class',
        '1' => 'Online Class',
    ];
    const LICENCE=[
        '0' => 'QTLS',
        '1' => 'QTS',
        '2' =>'Train'  
   
    ];
    
    const HOURRATE=[
        '0' => '10',
        '1' => '15',
        '2' =>'20',
        '3' =>'25',
        '4' =>'30',
    ];
    const SUBJECT=[
        '0' => 'Maths',
        '1' => 'English',
        '2' =>'Science',
        '3' =>'11 Plus',
        '4' =>'GCSE',
    ];
    const LEVEL=[
        '0' => 'Fresh',
        '1' => 'Basic',
        '2' =>'Intermediate',
        '3' =>'Expert',
    ];
    
}
