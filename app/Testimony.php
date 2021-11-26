<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{

    public function testimonyTags(){
        return $this->hasMany('App\TestimonyTag'); // a testimony has many testimonytags
    }

    protected $table = 'testimonies';

    public $timestamps =true;
}
