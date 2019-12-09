<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    //
    public function cvInfo()
    {
        return $this->hasOne('App\CvInfo');
    }

    public function experiences()
    {
        return $this->belongsTo('App\Experience', 'cv_id');
    }

    public function educations()
    {
        return $this->belongsTo('App\Education', 'cv_id');
    }

    public function languages()
    {
        return $this->belongsTo('App\Language', 'cv_id');
    }

    public function its()
    {
        return $this->belongsTo('App\IT', 'cv_id');
    }
}
