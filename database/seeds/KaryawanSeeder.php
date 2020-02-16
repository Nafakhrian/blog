<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Divisi;
use App\Karyawan;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create('id_ID');

        // for ($i=1; $i <= 100 ; $i++) { 
        	
        // 	DB::table('karyawan')->insert([
        // 		'nama' => 
        // 	]);

        // }
        factory(\App\Divisi::class, 5)->create();
        factory(\App\Karyawan::class, 5)->create();
    }
}
