<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        //
        'user_id'=>'factory(App\User::class)',
      'fullname'=> $faker->name,
      'location'=>$faker->sentence,
      'fullname_ar'=> $faker->name,
      'location_ar'=>$faker->sentence,
      'image'=>$faker->image('public/assets/fakeimages',640, 480),
    ];
});
