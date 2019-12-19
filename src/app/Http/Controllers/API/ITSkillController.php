<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ITSkills;
use App\Http\Controllers\API\ITSkillInfoController;

class ITSkillController extends Controller
{
    //
    public static function createMany($itSkills, $cv_id){
        $itSkill['cv_id'] = $cv_id;
        $newItSkill = ITSkills::create($itSkill);
        $newItSkill['it_skill_infos'] = ITSkillInfoController::createMany($itSkills, $newItSkill['id']);
        return $newItSkill;
    }
}
