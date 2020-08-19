<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    const ADMIN = 1;
    const TEACHER = 2;
    const STUDENT = 3;
    const PARENTS = 4;

}
