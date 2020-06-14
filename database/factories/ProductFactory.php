<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [

        'name' => $faker->name,
        'description' => $faker->name,
        'price' => rand(100,1000),
        'image' => rand(1,20).'.jpg',
        'quantity' => rand(10,300),
        'TVA' => rand(1,10)/10 ,
        'discount' => 0.0 ,
        'category_id' => rand(1,10),
        'brand_id' => rand(1,10),


        //
    ];
});
  