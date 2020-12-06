<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
     protected $fillable=[  'name','name_ar'
      ];
    public function available_times(){

      return $this->hasMany(Available_time::class);
    }
    public function categories(){

      return $this->hasMany(Category::class);
    }
    public function orders(){

      return $this->hasMany(Order::class);
    }
}
