<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        //
        'type_id'=>'factory(App\Type::class)',
      'name' =>$faker->word(),
      'name_ar' =>$faker->word(),
    ];
});
