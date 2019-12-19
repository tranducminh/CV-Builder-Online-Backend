<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Education;

class EducationController extends Controller
{
    //
    public static function createMany($educations, $cv_id){
        $new_educations = array();
        for ($i=0; $i < count($educations); $i++) { 
            $education = $educations[$i];
            $education['cv_id'] = $cv_id;
            $new_education = Education::create($education);
            array_push($new_educations, $new_education);
        }
        return $new_educations;
    }
}
