<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LanguageSkill extends Model
{
    //
    protected $fillable = [
        'language_id', 'skillName', 'level'
    ];
}
