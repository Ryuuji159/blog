<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Now::class, function (Faker $faker) {
    return [
        'md' => $faker->paragraphs(10, true)
    ];
});
