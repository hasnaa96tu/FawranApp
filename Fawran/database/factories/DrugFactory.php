<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Drug;
use Faker\Generator as Faker;

$factory->define(Drug::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->word,
        'name_ar'=>$faker->word,
      'price'=>$faker->randomFloat(2,100,20000),
      'offer_price'=>$faker->randomFloat(2,100,20000),
      'image'=>$faker->image('public/storage',640, 480),
      'is_aviliable'=>$faker->boolean(),
      'pharmacy_id'=>'factory(App\Pharmacy::class)',
      'medical_company_id'=>'factory(App\Medicl_company::class)',
      'category_id'=>'factory(App\Category::class)',
    ];
});
