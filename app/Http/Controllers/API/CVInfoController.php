<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CvInfo;

class CVInfoController extends Controller
{
    //
    public static function create($cv_info, $cv_id){
        // $main_cv_info = $cv_info->except(['educations', 'experiences', 'languages', 'itSkills']);
        $cv_info['cv_id'] = $cv_id;
        $new_cv_info = CvInfo::create($cv_info);
        return $new_cv_info;
    }
}
