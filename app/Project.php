<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function photos(){
        return $this->hasMany('App\Photo'); // a project has many photos
    }

    protected $table = 'projects';

    public $timestamps =true;

}
