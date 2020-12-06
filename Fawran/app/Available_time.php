<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Available_time extends Model
{
    //
    protected $fillable=['Type_id',
'Ph_SM_id' ,
'sun' ,
'mon' ,
'thu' ,
'wed' ,
'thr' ,
'fri' ,
'sat' ,
'open_time' ,
'close_time' ];
    public function supermarket(){

    return $this->belongsTo(Supermarket::class,'ph_sm_id');
}
    public function pharmacy(){

    return $this->belongsTo(Pharmacy::class,'ph_sm_id');
}
    public function type(){

    return $this->belongsTo(Type::class);
}
}
