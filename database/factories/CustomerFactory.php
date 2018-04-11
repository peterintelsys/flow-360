<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    
    return [
        'name' => $faker->name,
        'orgnbr' => $faker->isbn10,
        'phone1' => $faker->e164PhoneNumber,
        'phone2' => $faker->e164PhoneNumber,
        'phone3' => $faker->e164PhoneNumber,
        'adresstype1' => $faker->numberBetween($min=1, $max = 4),
        'street1' => $faker->streetAddress,
        'postalcode1' => $faker->postcode,
        'city1' => $faker->city,
        'client_id' => $faker->numberBetween($min=1, $max = 2),
    ];
});
