<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Izin;
use Faker\Generator as Faker;

$factory->define(Izin::class, function (Faker $faker) {
    return [
        'tanggal_izin'=>$faker->dateTimeBetween('+0 days', '+1 month'),
        'status_izin'=>'Menunggu',
        'user_id'=>1,
    ];
});
