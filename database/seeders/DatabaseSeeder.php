<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Universe;   
use App\Models\Superhero;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Universe::factory(10)->create();
        Superhero::factory(50)->create();

     
        $this->call([
            UniverseSeeder::class,
            SuperHeroesSeeder::class,
        ]);

    }
}
