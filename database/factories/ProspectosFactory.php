<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Prospecto;

$factory->define(Prospecto::class, function (Faker $faker) {

    return [
		'empresa'=> $faker->company,
		'contacto'=> $faker->name,
		'telefono'=> $faker->phoneNumber,
		'correo'=> $faker->email,
		'procedencia'=> $faker->numberBetween(1,7),
		'tipo'=> $faker->numberBetween(1,2),
		'estatus'=>$faker->randomElement(['prospecto', 'perdido','cliente']),
		'userid'=>$faker->numberBetween(4,7),
    ];
});

