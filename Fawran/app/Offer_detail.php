<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer_detail extends Model
{
    //
    protected $fillable=['offer_id',
  'product_id',
  'quantity'];
    public function offer(){

      return $this->belongsTo(Offer::class);
    }
    public function product(){

      return $this->belongsTo(Product::class);
    }
}
