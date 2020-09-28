<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'id','country_id', 'name', 'status'
    ];
    public function cities()
    {
        return $this->hasMany(City::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public static function getStates($country)
    {
        $result = State::where('country_id','=',$country)->orderby('name','asc')->get();
        return $result;
    }
}
