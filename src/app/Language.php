<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //
    public function languageSkills()
    {
        return $this->belongsTo('App\LanguageSkill', 'language_id');
    }
}
