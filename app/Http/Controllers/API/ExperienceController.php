<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Experience;

class ExperienceController extends Controller
{
    //
    public static function createMany($experiences, $cv_id){
        $new_experiences = array();
        for ($i=0; $i < count($experiences); $i++) { 
            $experience = $experiences[$i];
            $experience['cv_id'] = $cv_id;
            $new_experience = Experience::create($experience);
            array_push($new_experiences, $new_experience);
        }
        return $new_experiences;
    }
}
