<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Animal;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AnimalTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_an_animal()
    {
        $animal = Animal::create([
            'nome' => 'Rex',
            'especie' => 'Cachorro',
            'raca' => 'Labrador',
            'data_chegada' => '2024-01-01',
            'descricao' => 'Animal muito brincalhão.',
            'vacinado' => true,
            'castrado' => true,
            'status' => 'disponível',
        ]);

        $this->assertDatabaseHas('animais', [
            'nome' => 'Rex',
            'especie' => 'Cachorro',
            'raca' => 'Labrador',
        ]);
    }
}

