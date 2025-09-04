<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Superhero;
use App\Models\Universe;

class SuperHeroesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener los IDs de los universos de Marvel y DC
        $marvelIds = Universe::where('company', 'Marvel')->pluck('id')->toArray();
        $dcIds = Universe::where('company', 'DC')->pluck('id')->toArray();

        // Asignación simplificada: aquí tomo el primer universo de Marvel y DC
        $marvelId = $marvelIds[0];
        $dcId = $dcIds[0];

        Superhero::insert([
            [
                'name' => 'Spider-Man',
                'real_name' => 'Peter Benjamin Parker',
                'gender' => 'male',
                'universe_id' => $marvelId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hulk',
                'real_name' => 'Robert Bruce Banner',
                'gender' => 'male',
                'universe_id' => $marvelId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Captain America',
                'real_name' => 'Steven Rogers',
                'gender' => 'male',
                'universe_id' => $marvelId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Superman',
                'real_name' => 'Clark Kent',
                'gender' => 'male',
                'universe_id' => $dcId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Batman',
                'real_name' => 'Bruce Wayne',
                'gender' => 'male',
                'universe_id' => $dcId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Scarlet Spider',
                'real_name' => 'Ben Reilly',
                'gender' => 'male',
                'universe_id' => $marvelId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wonder Woman',
                'real_name' => 'Diana Prince',
                'gender' => 'female',
                'universe_id' => $dcId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Doomsday',
                'real_name' => 'Not Applicable',
                'gender' => 'male',
                'universe_id' => $dcId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Scarlet Witch',
                'real_name' => 'Wanda Maximoff',
                'gender' => 'female',
                'universe_id' => $marvelId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nightwing',
                'real_name' => 'Dick Grayson',
                'gender' => 'male',
                'universe_id' => $dcId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
