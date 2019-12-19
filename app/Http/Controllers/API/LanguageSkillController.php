<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LanguageSkill;

class LanguageSkillController extends Controller
{
    //
    public static function createMany($language_skills, $language_id){
        $new_language_skills = array();
        for ($j=0; $j < count($language_skills); $j++){
            $language_skill = $language_skills[$j];
            $language_skill['language_id'] = $language_id;
            $new_language_skill = LanguageSkill::create($language_skill);
            array_push($new_language_skills, $new_language_skill);
        }
        return $new_language_skills;
    }

    public static function details($language_id){

    }
}
