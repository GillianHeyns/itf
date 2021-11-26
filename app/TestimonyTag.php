<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestimonyTag extends Model
{
    public function testimony(){
        return $this->belongsTo('App\Testimony'); // a testimonyTag belongs to a testimony
    }

    public function tag(){
        return $this->belongsTo('App\Tag'); // a testimonyTag belongs to a tag
    }

    protected $table = 'testimony_tags';

    public $timestamps =true;
}
