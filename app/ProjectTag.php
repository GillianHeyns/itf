<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectTag extends Model
{
    public function projects()
    {
        return $this->belongsTo('App\Project')->withDefault(); // a projectTag belongs to a Project
    }

    public function tags()
    {
        return $this->belongsTo('App\Tag')->withDefault(); // a projectTag belongs to a Tag
    }

    protected $table = 'project_tags';
    public $timestamps = true;
}
