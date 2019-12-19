<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ITSkillInfos extends Model
{
    //
    protected $fillable = [
        'itskill_id', 'skillName', 'level'
    ];
}
