<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Delivery;
use App\User;

$factory->define(Delivery::class, function (Faker $faker) {
    return [
        //
        'description' => $faker->text(100),
        'state' => $faker->randomElement(['non livrée','en cours','livrée']),
        'delivery_option' => $faker->randomElement(['express','standard','oneDay delivery']),
        'address'=>$faker->address,
        'price' => rand(10,100) ,
        'commande_id' => $faker->unique()->randomElement([1,2,3,4,5,6,7,8,9,10]) ,
        'user_id' => 3 ,
    ];
});
