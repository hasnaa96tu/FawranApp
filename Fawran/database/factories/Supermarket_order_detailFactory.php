<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Supermarket_order_detail;
use Faker\Generator as Faker;

$factory->define(Supermarket_order_detail::class, function (Faker $faker) {
    return [
        //
        'product_id'=>'factory(App\Product::class)' ,
        'order_id'=>'factory(App\Order::class)' ,
        'supermarket_id'=>'factory(App\Supermarket::class)' ,
        'quantity'=>$faker->randomNumber(2, false),
        'total_price'=>$faker->randomFloat(2,100,20000),

        'notes'=>$faker->paragraph,
        'notes_ar'=>$faker->paragraph,
    ];
});
