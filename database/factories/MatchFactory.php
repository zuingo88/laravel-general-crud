<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Match;
use Faker\Generator as Faker;

$factory->define(Match::class, function (Faker $faker) {

    return [
        'team1' => $faker->word,
        'team2' => $faker->word,
        'point1' => rand(0, 30),
        'point2' => rand(0, 30),
        'result' => rand(0, 1)==0,    
    ];
});
