<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Available_time;
use Faker\Generator as Faker;

$factory->define(Available_time::class, function (Faker $faker) {
    return [
        //
        'type_id'=>'factory(App\Type::class)',
    'ph_sm_id'=>'factory(App\Pharmacy::class)' ,
    'sun'=>$faker->boolean() ,
    'mon'=>$faker->boolean() ,
    'thu'=>$faker->boolean() ,
    'wed'=>$faker->boolean() ,
    'thr'=>$faker->boolean() ,
    'fri'=>$faker->boolean() ,
    'sat' =>$faker->boolean(),
    'open_time'=> $faker->dateTime(),
    'close_time'=> $faker->dateTime() ,
    ];
});
