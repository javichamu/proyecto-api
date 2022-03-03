<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Libro;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Libro::class, function (Faker $faker) {
    return [
        'titulo' => $faker->word,
        'descripcion' => Str::random(225),

    ];
});
