<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Acompanhamento;

class AcompanhamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Acompanhamento::factory(10)->create();
    }
}
