<?php

use Faker\Generator as Faker;

$factory->define(App\Author::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'site_id' => 1,
        'percentage' => $faker->numberBetween(60, 90),
    ];
});
