<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clas extends Model
{
    protected $table = 'classes';


    public function users()
    {

        return $this->hasMany('App\User', 'id', 'clas_id');

    }


//public function subjects()
//    {
//
//        return $this->belongsToMany(Subject::class);
//
//    }
}