<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App_rate extends Model
{
    //
      protected $fillable=['customer_id','rate'];

    public function customer(){

    return $this->belongsTo(Customer::class);
}
}
