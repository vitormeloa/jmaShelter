<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Adocao;

class AdocaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Adocao::factory(10)->create();
    }
}
