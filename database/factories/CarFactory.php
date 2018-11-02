<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement(['ford','honda','toyota']),
        'model' => $faker->numberBetween($min = 1000, $max = 9000),
        'year' => $faker->year($max = 'now'),
    ];
});
