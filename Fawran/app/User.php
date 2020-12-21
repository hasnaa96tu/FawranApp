<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','name_ar', 'email', 'password','status','user_code','user_type_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function user_type(){

      return $this->belongsTo(User_type::class);
    }
    public function customers(){

      return $this->hasMany(Customer::class);
    }
    public function orders(){

      return $this->hasMany(Order::class);
    }
    public function pharmacies(){

      return $this->hasMany(Pharmacy::class);
    }
    public function supermarkets(){
      return $this->hasMany(Supermarket::class);
    }
}
