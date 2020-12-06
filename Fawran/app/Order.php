<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
  protected  $fillable=['type_id',
  'request_date' ,
  'delivery_date' ,
  'status' ,
  'location',
  'location_ar',
  'user_id',
  'cost',
  'distance'
];
    public function type(){

      return $this->belongsTo(Type::class);
    }
    public function user(){

      return $this->belongsTo(User::class);
    }
    public function supermarket_order_details(){
      return $this->hasMany(Supermarket_order_detail::class);
    }
    public function pharmacy_order_details(){
      return $this->hasMany(Pharmacy_order_detail::class);
    }
}
