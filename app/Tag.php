<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function project_tags()
    {
        return $this->hasMany('App\ProjectTag'); // a tag has many projecttags
    }

    public function testimony_tags()
    {
        return $this->hasMany('App\TestimonyTag'); // a tag has many testimonytags
    }

    protected $table = 'tags';
    public $timestamps = true;
}
