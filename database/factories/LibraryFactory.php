<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Library;
use Faker\Generator as Faker;

$factory->define(Library::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'avatar' => $faker->image('storage/images/library'),
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
    ];
});

