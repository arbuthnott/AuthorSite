<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];
    
    public articles() {
        return $this->belongsToMany('App\Article');
    }
}
