<?php

use App\Category;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'desc' => $faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});
