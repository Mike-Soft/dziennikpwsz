<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{

    protected $fillable = [
        'user_id', 'subject_id', 'mark'
    ];

    protected $table = 'subject_user';
}
