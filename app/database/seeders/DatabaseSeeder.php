<?php

namespace Database\Seeders;

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
        $this->call([
            ClienteSeeder::class,
            EmpleadoSeeder::class,
            FacturaSeeder::class,
            RolesSeed::class,
            UserSeeder::class,
        ]);
    }
}
