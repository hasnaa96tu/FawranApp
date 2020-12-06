<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    //
    protected $fillable=['name',
    'name_ar',
  'price',
  'offer_price',
  'image',
  'is_aviliable',
  'pharmacy_id',
  'medicl_company_id',
  'category_id'];
    public function pharmacy_order_details(){

      return $this->hasMany(Pharmacy_order_detail::class);
    }
    public function pharmacy(){

      return $this->belongsTo(Pharmacy::class);
    }
    public function medicl_company(){

      return $this->belongsTo(Medicl_company::class);
    }
    public function category(){

      return $this->belongsTo(Category::class);
    }
}
