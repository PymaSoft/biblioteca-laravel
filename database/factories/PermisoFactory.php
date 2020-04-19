<?php

use App\Models\Admin\Permiso;
use Faker\Generator as Faker;

$factory->define(Permiso::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'slug' => $faker->word,
    ];
});
