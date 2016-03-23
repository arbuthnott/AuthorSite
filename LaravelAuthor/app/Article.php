<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'alias', 'importance', 'body'];
    
    public tags() {
        return $this->belongsToMany('App\Tag');
    }
}
