<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //
    protected $fillable = [
        'cv_id', 'timeStart', 'timeEnd','trainingUnit', 'specialized', 'level', 'graduationType'
    ];
}
