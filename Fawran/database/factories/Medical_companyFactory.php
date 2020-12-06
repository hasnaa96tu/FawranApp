<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Medical_company;
use Faker\Generator as Faker;

$factory->define(Medical_company::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->word,
        'name_ar'=>$faker->word,
    ];
});
