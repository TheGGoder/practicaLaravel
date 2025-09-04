<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Universe;

class UniverseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Universe::insert([
            [
                'universe' => 'U1',
                'company' => 'DC',
                'age' => 'silvery',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'universe' => 'U2',
                'company' => 'DC',
                'age' => 'golden',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'universe' => 'U3',
                'company' => 'DC',
                'age' => 'modern',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'universe' => 'U4',
                'company' => 'Marvel',
                'age' => 'silvery',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'universe' => 'U5',
                'company' => 'Marvel',
                'age' => 'modern',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
