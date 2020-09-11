<?php

    namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comments;
use Faker\Generator as Faker;

$factory->define(Comments::class, function (Faker $faker) {
    return [
        'name'      =>  $faker->firstName,
        'comment'   =>  $faker->text(200),
    ];
});
