<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\FeedBack;
use Faker\Generator as Faker;

$factory->define(FeedBack::class, function (Faker $faker) {
    return [
        //
        'customer_id'=>'factory(App\Customer::class)',
    'description'=>$faker->paragraph,
      'description_ar'=>$faker->paragraph,
    ];
});
