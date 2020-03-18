<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    public function scopePublished($query){
      return $query->where('status',1);
    }

    public function products(){
      return $this->belongsToMany('App\Product')->withTimestamps();
    }
}
