<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Delivery;

$factory->define(Delivery::class, function (Faker $faker) {
    return [
        //
        'description' => $faker->text(100),
        'state' => $faker->randomElement(['non livrée','en cours','livrée']),
        'delivery_option' => $faker->randomElement(['express','standard','oneDay delivery']),
        'address'=>$faker->address,
        'price' => rand(10,100) ,
        'commande_id' => rand(1,10) ,
    ];
});
