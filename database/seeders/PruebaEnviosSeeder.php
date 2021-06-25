<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PruebaEnviosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Envio::factory(10)->create();
    }
}
