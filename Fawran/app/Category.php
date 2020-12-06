<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable=['type_id',
  'name','name_ar'];
    public function type(){

    return $this->belongsTo(Type::class);
}
public function supermarkets(){
  return $this->hasMany(Supermarket::class);
}
public function pharmacies(){
  return $this->hasMany(Pharmacy::class);
}
public function drugs(){
  return $this->hasMany(Drug::class);
}
public function products(){
  return $this->hasMany(Product::class);
}
public function orders(){
  return $this->hasMany(Order::class);
}

}
