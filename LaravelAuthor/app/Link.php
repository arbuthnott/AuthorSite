<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = ['url', 'type', 'description', 'work_id'];
    
    public function work() {
        return $this->belongsTo('App\Work');
    }
}
