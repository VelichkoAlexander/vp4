<?php

use App\Product;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'desc' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'price' => $faker->randomNumber(3),
        'image' => 'game-' . rand(1, 9) . '.jpg',
        'category_id' => rand(1, 5),
    ];
});
