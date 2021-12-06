<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestimonyTag extends Model
{
    public function testimonies()
    {
        return $this->belongsTo('App\Testimony')->withDefault(); // a testimonyTag belongs to a testimony
    }

    public function tags()
    {
        return $this->belongsTo('App\Tag')->withDefault(); // a testimonyTag belongs to a tag
    }

    protected $table = 'testimony_tags';
    public $timestamps = true;
}
