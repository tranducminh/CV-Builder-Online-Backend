<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CvInfo extends Model
{
    //
    protected $fillable = [
        'cv_id', 'title', 'jobPurpose', 'email', 'fullname', 'birthday', 'sex', 'image', 'phone', 'address'
    ];
}
