<?php

use App\Order;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


$factory->define(\App\Order::class, function (Faker $faker) {
    return [
        'email' => $faker->randomElement($array = ['test@test.test', $faker->email()]),
        'name' => $faker->name(),
        'product_id' => rand(1, 15)
    ];
});
