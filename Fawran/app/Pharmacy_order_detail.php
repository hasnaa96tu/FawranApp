<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacy_order_detail extends Model
{
    //
  protected  $fillable=[  
      'drug_id',
      'order_id',
      'pharmacy_id',
      'quantity',
      'total_price',
      'is_RX',
      'preciption_img'];

    public function order(){

      return $this->belongsTo(Order::class);
    }
    public function pharmacy(){

    return $this->belongsTo(Pharmacy::class);
}
   public function drug(){

   return $this->belongsTo(Drug::class);
  }
}
