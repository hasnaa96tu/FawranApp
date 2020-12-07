<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Supermarket;
use Faker\Generator as Faker;

$factory->define(Supermarket::class, function (Faker $faker) {
    return [
        //
        'user_id'=>'factory(App\User::class)',
         'category_id'=>'factory(App\Category::class)',
         'name'=>$faker->name,
         'name_ar'=>$faker->name,
         'location'=>$faker->sentence,
         'location_ar'=>$faker->sentence,
         'phone_number'=>$faker->randomNumber(7, true),
           'image'=>$faker->image('public/assets/fakeimages',640, 480),
    ];
});
