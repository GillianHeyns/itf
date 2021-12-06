<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function projects()
    {
        return $this->belongsTo('App\Project')->withDefault(); // a projectTag belongs to a Project
    }

    public function testimonies()
    {
        return $this->belongsTo('App\Testimony')->withDefault(); // a projectTag belongs to a Testimony
    }

    protected $table = 'photos';
    public $timestamps = true;
}
