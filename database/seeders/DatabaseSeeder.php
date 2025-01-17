<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Ejecuta los seeders de la base de datos.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            LocationSeeder::class,
        ]);
    }
}
