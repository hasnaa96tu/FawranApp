<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Offer;
use Faker\Generator as Faker;

$factory->define(Offer::class, function (Faker $faker) {
    return [
        //
        'description'=>$faker->paragraph,
        'description_ar'=>$faker->paragraph,
      'price'=>$faker->randomFloat(2,100,20000),
      'start_date'=> $faker->dateTime(),
      'end_date'=> $faker->dateTime(),
      'is_aviliable'=>$faker->boolean(),
    ];
});
