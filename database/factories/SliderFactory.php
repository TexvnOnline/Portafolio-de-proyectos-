<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Slider;
use Faker\Generator as Faker;

$factory->define(Slider::class, function (Faker $faker) {
    return [
        'text1' => $faker->sentence($nbWords = 5, $variableNbWords = true),
        'text2' => $faker->sentence($nbWords = 8, $variableNbWords = true),
        'button1' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'button2' => $faker->sentence($nbWords = 2, $variableNbWords = true),
    ];
});
