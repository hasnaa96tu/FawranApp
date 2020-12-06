<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    //
    protected $fillable=['customer_id',
'description','description_ar'];
    public function customer(){

      return $this->belongsTo(Customer::class);
    }
}
