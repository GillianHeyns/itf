<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function photos(){
        return $this->hasMany('App\Photo'); // a project has many photos
    }

    public function projectTags(){
        return $this->hasMany('App\ProjectTag'); // a project has many projecttags
    }

    protected $table = 'projects';

    public $timestamps =true;

}
