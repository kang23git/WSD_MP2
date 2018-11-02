<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement(['ford','honda','toyota']),
        'model' => $faker->randomElement(['XN','UV','AM','QR']),
        'year' => $faker->year($max = 'now'),
    ];
});
