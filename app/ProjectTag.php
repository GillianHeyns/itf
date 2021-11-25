<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectTag extends Model
{
    public function project(){
        return $this->belongsTo('App\Project'); // a projectTag belongs to a Project
    }

    protected $table = 'project_tags';
    public $timestamps =true;
}
