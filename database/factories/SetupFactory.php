<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Setup::class, function (Faker $faker) {
    return [
        'title' => $faker->words(5, true),
        'md' => $faker->paragraphs(10, true)
    ];
});
