<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Product extends Model
{
    use softDeletes;

    public function categories(){
      return $this->belongsToMany('App\Category')->withTimestamps();
    }

    public function colors(){
      return $this->belongsToMany('App\Color')->withTimestamps();
    }

    public function pictures(){
      return $this->hasMany('App\Picture');
    }
}
