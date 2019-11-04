<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];

    public function posts(){
        return $this->morphedByMany(Post::class, 'taggable');
    }

    public function Videos(){
        return $this->morphedByMany(Video::class, 'taggable');
    }
}
