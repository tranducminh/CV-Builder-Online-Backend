<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //
    protected $fillable = [
        'cv_id', 'lgName'
    ];
    public function languageSkills()
    {
        return $this->hasMany('App\LanguageSkill', 'language_id');
    }
}
