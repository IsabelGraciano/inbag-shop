<?php
/* Santiago Moreno Rave*/
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\WishList;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
//attributes id, customer_id, product_id, created_at, updated_at

$factory->define(WishList::class, function (Faker $faker) {
    return [
     'customer_id' => $faker->numberBetween($min = 1, $max = 10),
     'product_id' => $faker->numberBetween($min = 1, $max = 10),      
    ];
});
