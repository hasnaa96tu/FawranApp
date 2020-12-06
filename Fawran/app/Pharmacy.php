<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    //
  protected  $fillable=[  'user_id',
      'category_id',
      'name',
      'location',
      'name_ar',
      'location_ar',
      'phone_number',
        'image',
      ];

    public function available_times(){

      return $this->hasMany(Available_time::class);
    }
    public function pharmacy_order_details(){

      return $this->hasMany(Pharmacy_order_detail::class);
    }
    public function drugs(){
      return $this->hasMany(Drug::class);
    }
    public function user(){

      return $this->belongsTo(User::class);
    }
    public function category(){

      return $this->belongsTo(Category::class);
    }

}
