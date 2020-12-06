<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supermarket_order_detail extends Model
{
    //
  protected  $fillable=[
      'product_id',
      'order_id',
      'supermarket_id',
      'quantity',
      'total_price',
    'notes_ar',
      'notes'
      ];
    public function order(){

      return $this->belongsTo(Order::class);
    }
    public function product(){

      return $this->belongsTo(Product::class);
    }
    public function supermarket(){
      return $this->belongsTo(Supermarket::class);
    }
}
