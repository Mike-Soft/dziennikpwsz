<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function classes()
    {

        return $this->belongsToMany(User::class)->using('App\SubjectUser')->withPivot('mark');

    }
}
