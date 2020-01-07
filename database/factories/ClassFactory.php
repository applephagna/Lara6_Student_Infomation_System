<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Class;
use Faker\Generator as Faker;

$factory->define(Class::class, function (Faker $faker) {

    return [
        'class_name' => $faker->word,
        'class_code' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
