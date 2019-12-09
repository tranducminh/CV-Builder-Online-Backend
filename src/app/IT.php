<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IT extends Model
{
    //
    public function itSkills()
    {
        return $this->belongsTo('App\ITSkill', 'it_id');
    }
}
