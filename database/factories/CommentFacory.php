<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->text($faker->numberBetween(0,199)),
        'post_id' => $faker->numberBetween(33,82),
    ];
});
