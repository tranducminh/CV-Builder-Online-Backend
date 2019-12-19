<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    //
    protected $fillable = [
        'cv_id', 'timeStart', 'timeEnd', 'jobPosition', 'jobDescription', 'achievements'
    ];
}
