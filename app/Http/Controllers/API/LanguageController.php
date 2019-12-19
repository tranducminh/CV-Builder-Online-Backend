<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Language;
use App\Http\Controllers\API\LanguageSkillController;

class LanguageController extends Controller
{
    //
    public static function createMany($languages, $cv_id){
        $new_languages = array();
        for ($i=0; $i < count($languages); $i++) { 
            $language = $languages[$i];

            $temp['lgName'] = $language['lgName'];
            $temp['cv_id'] = $cv_id;
            $newLg = Language::create($temp);
            $newLg['language_skills'] = LanguageSkillController::createMany($language['language_skills'], $newLg['id']); 
            array_push($new_languages, $newLg);           
        }
        return $new_languages;
    }
}
