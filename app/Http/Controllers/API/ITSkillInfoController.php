<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ITSkillInfos;

class ITSkillInfoController extends Controller
{
    //
    public static function createMany($itSkills, $itskill_id){
        $new_itskill_infos = array();
        for ($i=0; $i < count($itSkills); $i++) { 
            $itSkillInfo = $itSkills[$i];
            $itSkillInfo['itskill_id'] = $itskill_id;
            $new_itskill_info = ITSkillInfos::create($itSkillInfo);
            array_push($new_itskill_infos, $new_itskill_info);
        }
        return $new_itskill_infos;
    }
}
