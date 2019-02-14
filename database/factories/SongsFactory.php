<?php

use Faker\Generator as Faker;

$factory->define(\App\Song::class, function (Faker $faker) {
    return [
        'title' => $faker->catchPhrase(),
        'album_id' => $faker->numberBetween(1, 20),
        'artist_id' => $faker->numberBetween(1, 20),
        'user_id' => 1
    ];
});
