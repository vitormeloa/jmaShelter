<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Adocao;
use App\Models\Animal;
use App\Models\Adotante;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdocaoTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_an_adocao()
    {
        $animal = Animal::factory()->create();
        $adotante = Adotante::factory()->create();

        $adocao = Adocao::create([
            'animal_id' => $animal->id,
            'adotante_id' => $adotante->id,
            'data_adocao' => '2024-01-01',
        ]);

        $this->assertDatabaseHas('adocoes', [
            'animal_id' => $animal->id,
            'adotante_id' => $adotante->id,
        ]);
    }
}
