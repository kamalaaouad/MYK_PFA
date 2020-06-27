<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Commande;


$factory->define(Commande::class, function (Faker $faker) {
    return [
        //
        'user_id'=> $faker->randomElement(['1','2','3']),
        'paid'=> '1',
        'amount'=> rand(100,1000),

    ];
});
