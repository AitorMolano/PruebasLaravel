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
        $this->call([
            UsersTableSeeder::class,
            ArticulosTableSeeder::class,
        ]);
        
    }
}
