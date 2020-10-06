<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Penceramah;
use Faker\Generator as Faker;

$factory->define(Penceramah::class, function (Faker $faker) {
    return [
        'nama'=>$faker->name,
        'noic'=>$faker->unique->numberBetween(111111111111,999999999999),
        'bidang'=>$faker->sentence(5),
        'tarikhlahir'=>$faker->date,
        'bio'=>$faker->text(),

    ];
});
