<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    public function scopePublished($query){
      return $query->where('status',1);
    }

    public function products(){
      return $this->belongsToMany('App\Product')->withTimestamps();
    }
}
