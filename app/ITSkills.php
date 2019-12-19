<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ITSkills extends Model
{
    //
    protected $fillable = [
        'cv_id'
    ];
    public function itSkillInfos()
    {
        return $this->hasMany('App\ITSkillInfos', 'itskill_id');
    }
}
