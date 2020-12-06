<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_type extends Model
{
    //
     protected $fillable=[  'name','count','name_ar'
      ];
    public function users(){

      return $this->hasMany(User::class);
    }

}
