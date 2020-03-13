<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->paragraph,
        'url' => $faker->word,
        'user_id' => function(){

            return App\User::all()->random();
        },
    ];
});
