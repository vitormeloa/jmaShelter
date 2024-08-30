<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Adotante;

class AdotanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Adotante::factory(10)->create();
    }
}
