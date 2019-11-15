<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'price' => $faker->randomFloat(0,50000,150000),
        'avatar' => $faker->image('storage/images/book'),
        'status_id' => $faker->randomFloat(0,0,1),
        'library_id' => $faker->randomFloat(0,0,1),
    ];
});
