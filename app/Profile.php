<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $hidden = [
        'id', 'user_id',
    ];
}
