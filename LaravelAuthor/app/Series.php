<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $fillable = ['name', 'alias', 'short_description', 'long_description', 'importance'];
    
    public function books() {
        return $this->hasMany('App\Work');
    }
}
