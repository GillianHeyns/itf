<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{

    public function photos()
    {
        return $this->hasMany('App\Photo'); // a project has many photos
    }

    public function testimony_tags(){
        return $this->hasMany('App\TestimonyTag'); // a testimony has many testimonytags
    }

    protected $table = 'testimonies';
    public $timestamps =true;
}
