<?php

use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {
    return [
     	'client_id' => 1,
        'summary' => $faker->numberBetween($min = 150, $max = 17000),
    ];
});
