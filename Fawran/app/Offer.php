<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    protected $fillable=['description',
    'description_ar',
  'price',
  'start_date',
  'end_date',
  'is_avilable'];
    public function offer_details(){
      return $this->hasMany(Offer_detail::class);
    }
}
