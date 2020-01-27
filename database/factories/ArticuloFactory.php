<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Articulo;
use Faker\Generator as Faker;

$factory->define(Articulo::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->word,
        'imagen'=>$faker->imageUrl($width=80, $height=80),
        'pvp'=>$faker->optional()->randomFloat(2,1,999)
    ];
});
