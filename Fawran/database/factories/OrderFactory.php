<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        //
        'type_id'=>'factory(App\Type::class)',
      'request_date'=>$faker->dateTime() ,
      'delivery_date'=>$faker->dateTime() ,
      'status'=> $faker->numberBetween(1, 4),
      'location'=>$faker->sentence,
      'location_ar'=>$faker->sentence,
      'user_id'=>'factory(App\User::class)',
      'cost'=>$faker->randomFloat(2,100,20000),
      'distance'=>$faker->randomFloat(2,100,20000),
    ];
});
