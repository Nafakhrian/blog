<?php

use Illuminate\Database\Seeder;
use App\Divisi;
use Faker\Factory as Faker;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(App\Divisi::class,10)->create();
    }
}
