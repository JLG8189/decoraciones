<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ArticulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articulos')->insert(['nombre' => 'FLORERO', 'precio' => '80.00',]);
        DB::table('articulos')->insert(['nombre' => 'VELADORA', 'precio' => '150.00',]);
        DB::table('articulos')->insert(['nombre' => 'CENICERO', 'precio' => '60.00',]);
        DB::table('articulos')->insert(['nombre' => 'BODA', 'precio' => '500.00',]);
        DB::table('articulos')->insert(['nombre' => 'XV', 'precio' => '600.00',]);
        DB::table('articulos')->insert(['nombre' => 'BAUTIZO', 'precio' => '250.00',]);
        DB::table('articulos')->insert(['nombre' => 'FIESTA', 'precio' => '450.00',]);
    }
}
