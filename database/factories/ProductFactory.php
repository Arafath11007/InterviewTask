<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'upload_speed' => $faker->numberBetween($min = 80, $max = 120),
        'download_speed' => $faker->numberBetween($min = 80, $max = 120),
        'technology' => $faker->randomElement([1, 2]),
        'static_ip' => $faker->boolean()
    ];
});
