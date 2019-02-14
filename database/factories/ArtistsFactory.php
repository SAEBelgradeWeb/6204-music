<?php

use Faker\Generator as Faker;

$factory->define(\App\Artist::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'image' => $faker->image(storage_path('app/public/artists'), 300, 300, null, false),
        'user_id' => 1
    ];
});
