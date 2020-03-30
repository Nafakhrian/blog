<?php

use Illuminate\Database\Seeder;
use App\Karyawan;
use Faker\Factory as Faker;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(App\Karyawan::class,20)->create();
    }
}
