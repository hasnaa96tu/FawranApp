<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pharmacy_order_detail;
use Faker\Generator as Faker;

$factory->define(Pharmacy_order_detail::class, function (Faker $faker) {
    return [
        //

         'drug_id'=>'factory(App\Drug::class)',
         'order_id'=>'factory(App\Order::class)',
         'pharmacy_id'=>'factory(App\Pharmacy::class)',
         'quantity'=>$faker->randomNumber(2, false),
         'total_price'=>$faker->randomFloat(2,100,20000),
         'is_RX'=>$faker->boolean() ,
         'preciption_img'=>$faker->image('public/assets/fakeimages',640, 480)
    ];
});
