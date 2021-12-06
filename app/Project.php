<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function photos()
    {
        return $this->hasMany('App\Photo'); // a project has many photos
    }

    public function project_tags()
    {
        return $this->hasMany('App\ProjectTag');
//        return $this->hasMany('App\ProjectTag','projects_id','id'); // a project has many projecttags
    }

    protected $table = 'projects';
    public $timestamps = true;
}
