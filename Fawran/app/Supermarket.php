<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supermarket extends Model
{
    //
    protected $fillable=[  'user_id',
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
    public function products(){

      return $this->hasMany(Product::class);
    }
    public function supermarket_order_details(){

      return $this->hasMany(Supermarket_order_detail::class);
    }
    public function user(){

      return $this->belongsTo(User::class);
    }
    public function category(){

      return $this->belongsTo(Category::class);
    }
}
