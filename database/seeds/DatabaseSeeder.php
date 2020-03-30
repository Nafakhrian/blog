<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(DivisiSeeder::class);
        $this->call(KaryawanSeeder::class);
        // factory(\App\User::class, 10)->create();

    }
}
