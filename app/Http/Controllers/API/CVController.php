<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\CV;
use App\Experience;
use App\ITSkills;
use App\ITSkillInfos;
use App\Language;
use App\LanguageSkill;
use App\Http\Controllers\API\CVInfoController;
use App\Http\Controllers\API\EducationController;
use App\Http\Controllers\API\ExperienceController;
use App\Http\Controllers\API\LanguageController;
use App\Http\Controllers\API\ITSkillController;

class CVController extends Controller
{
    
    //
    public function create(Request $request){
        $user = Auth::user();
        // dd($user->id);
        $input= $request->all();
        
        $input['user_id'] = $user->id;
        // dd($input);
        $cv = CV::create($input);
        $cv_id = $cv->id;
        $cv['cv_info'] = CVInfoController::create($request->cv_info, $cv_id); 
        $cv['educations'] = EducationController::createMany($request->educations, $cv_id);
        $cv['experiences'] = ExperienceController::createMany($request->experiences, $cv_id);
        $cv['languages'] = LanguageController::createMany($request->languages, $cv_id);
        $cv['itSkills'] = ITSkillController::createMany($request->itSkills, $cv_id);
        return response()->json(['success'=>$cv]); 
    }

    public function details(Request $request){
        $user = Auth::user();
        $cv_id = $request->cv_id;
        $cv['cv_info'] = CV::find($cv_id)->cvInfo;
        $cv['experiences'] = CV::find($cv_id)->experiences;
        $cv['educations'] = CV::find($cv_id)->educations;
        $cv['languages'] = array();
        $languages = CV::find($cv_id)->languages;
        foreach ($languages as $language) {
            $temp = $language;
            $temp['language_skills'] = Language::find($language['id'])->languageSkills;
            array_push($cv['languages'], $temp);
        }
        $itSkills = CV::find($cv_id)->itSkills;
        $temp = $itSkills;
        $temp['it_skill_infos'] = ITSkills::find($itSkills['id'])->itSkillInfos;
        $cv['itSkills'] = $temp;   
        return response()->json(['success'=>$cv]); 
    }
}
