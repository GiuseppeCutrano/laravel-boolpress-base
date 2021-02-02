<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CategoriesModel;
use Faker\Generator as Faker;

$factory->define(CategoriesModel::class, function (Faker $faker) {
    return [
        'title'=> $faker->word,
        'slug'=> $faker->slug
    ];
});
