<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = ['title', 'alias', 'short_description', 'long_description', 'publish_date'];
    
    public links() {
        return $this->hasMany('App\Link');
    }
    
    public reviews() {
        return $this->hasMany('App\Review');
    }
}
