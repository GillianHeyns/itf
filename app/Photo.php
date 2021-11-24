<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function project(){
        return $this->belongsTo('App\Project'); // a photo belongs to a Project
    }

    protected $table = 'photos';

    public $timestamps =true;
}
