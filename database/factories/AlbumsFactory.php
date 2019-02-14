<?php

use Faker\Generator as Faker;

$factory->define(\App\Album::class, function (Faker $faker) {
    return [
        'title' => $faker->catchPhrase(),
        'cover_art' => $faker->image(storage_path('app/public/albums'), 300, 300, null, false),
        'published_at' => $faker->dateTime(),
        'user_id'=> 1,
        'artist_id' => $faker->numberBetween(1, 20)
    ];
});
