<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Karyawan;
use Faker\Generator as Faker;

$factory->define(Karyawan::class, function (Faker $faker) {
	$faker->addProvider(new \Mmo\Faker\PicsumProvider($faker));
    return [
        'nik' => $faker->numberBetween($min=19000, $max=19999),
        'nama' => $faker->name,
        'alamat' => $faker->city,
        'email' => $faker->email,
    	'divisi' => $faker->numberBetween($min=1, $max=5),
        'foto' => $faker->picsum('public/uploads', 400, 400, false)
    ];
});
