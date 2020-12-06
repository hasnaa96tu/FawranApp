<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Offer_detail;
use Faker\Generator as Faker;

$factory->define(Offer_detail::class, function (Faker $faker) {
    return [
        //
        'offer_id'=>'factory(App\Offer::class)',
      'product_id'=>'factory(App\Product::class)',
      'quantity'=>$faker->randomNumber(3, false),
    ];
});
