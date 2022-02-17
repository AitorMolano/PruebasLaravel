<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('ES_es');

        for ($i=0; $i < 25; $i++) { 
            DB::table('articulos')->insert([
                'titulo' => $faker->name(),
                'contenido' => $faker->text(500),        
            ]);
        }
    }
}
