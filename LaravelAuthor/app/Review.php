<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['work_id', 'source', 'link', 'importance', 'body'];
    
    public function work() {
        return $this->belongsTo('App\Work');
    }
}
