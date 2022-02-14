<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Articulo;
use Illuminate\Support\Facades\DB;
use Spatie\LaravelIgnition\Support\Composer\FakeComposer;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $faker = \Faker\Factory::create('ES_es');

        for ($i=0; $i < 10; $i++) { 
            # code...
            DB::table('users')->insert([
                'name' => $faker->name(),
                'email'=>$faker->unique()->safeEmail(),
                'email_verified_at' => now(), 
                'password'=>$faker->password(),
                'remember_token' => Str::random(10),
            ]);

            DB::table('articulos')->insert([
                'titulo' => $faker->name(),
                'contenido' => $faker->text(500),
            ]);
        }
    }
}
