<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //

    protected $fillable=['user_id',
  'fullname',
  'location',
  'fullname_ar',
  'location_ar',
  'image'];
    public function app_rates(){

      return $this->hasMany(App_rate::class);
    }
    public function feed_backs(){

      return $this->hasMany(FeedBack::class);
    }
    public function user(){

      return $this->belongsTo(User::class);
    }
}
