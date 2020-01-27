<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Libro;
//use Faker\Generator as Faker;
//Para cargar en castellano
$faker = Faker\Factory::create('es_ES');


$factory->define(Libro::class, function ($faker) {
    return [
        'titulo'=> $faker->sentence(3),
        'sinapsis'=> $faker->text($maxNBChars=100),
        'pvp'=> $faker->randomFloat($nbMaxDecimals=2, $min=1, $max=999),
        'stock'=> $faker->optional(3)->numberBetween($min=1, $max=50),
        'isbn'=> $faker->unique(3)->isbn13
    ];
});
