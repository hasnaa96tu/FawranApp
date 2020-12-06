<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\App_rate;
use Faker\Generator as Faker;

$factory->define(App_rate::class, function (Faker $faker) {
    return [
        //
        'customer_id'=>'factory(App\Customer::class)',
        'rate'  =>$faker->numberBetween(1, 5),
    ];
});
