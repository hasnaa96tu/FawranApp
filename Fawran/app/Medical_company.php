<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medical_company extends Model
{
    //
    protected $fillable=['name','name_ar'];
    public function drugs(){
      return $this->hasMany(Drug::class);
    }
}
