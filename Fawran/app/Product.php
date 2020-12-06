<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable=[
      'name',
      'name_ar',
      'price',
      'offer_price',
      'image',
      'is_aviliable',
      'supermarket_id',
      'category_id'
      ];

    public function offer_details(){
      return $this->hasMany(Offer_detail::class);
    }
    public function supermarket(){
      return $this->belongsTo(Supermarket::class);
    }
    public function category(){

      return $this->belongsTo(Category::class);
    }
    public function supermarket_order_details(){

      return $this->hasMany(Supermarket_order_detail::class);
    }

}
