<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'details' => $faker->sentence($nbWords = 15, $variableNbWords = true),
        'address' => $faker->address,
        'email' =>$faker->unique()->safeEmail, 
        'phone' => $faker->phoneNumber, 
        'link' => $faker->url,
        'hours' => $faker->time($format = 'H:i:s', $max = 'now'),
    ];
});
