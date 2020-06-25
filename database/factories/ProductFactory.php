<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [

        'name' => $faker->company,
        'description' => $faker->text(100),
        'price' => rand(100,1000),
        'image' => rand(1,20).'.jpg',
        'quantity' => rand(10,100),
        'TVA' => rand(1,10)/10 ,
        'discount' => floatval(rand(1,5))/10 ,
        'category_id' => rand(1,5),
        'brand_id' => rand(1,5),


        //
    ];
});
