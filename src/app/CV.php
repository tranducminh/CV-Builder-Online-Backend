<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    //
    protected $fillable = [
        'user_id', 'cvType',
    ];
    public function cvInfo()
    {
        return $this->hasOne('App\CvInfo', 'cv_id');
    }

    public function experiences()
    {
        return $this->hasMany('App\Experience', 'cv_id');
    }

    public function educations()
    {
        return $this->hasMany('App\Education', 'cv_id');
    }

    public function languages()
    {
        return $this->hasMany('App\Language', 'cv_id');
    }

    public function itSkills()
    {
        return $this->hasOne('App\ITSkills', 'cv_id');
    }
}
