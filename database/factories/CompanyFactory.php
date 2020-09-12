<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'whoAreWe' => $faker->sentence($nbWords = 45, $variableNbWords = true),
        'our' => $faker->sentence($nbWords = 45, $variableNbWords = true),
        'whatWeDo' =>$faker->sentence($nbWords = 45, $variableNbWords = true), 
        'whyChooseUs' => $faker->sentence($nbWords = 45, $variableNbWords = true), 
        'saveTimeWithUs' => $faker->sentence($nbWords = 45, $variableNbWords = true), 
    ];
});
