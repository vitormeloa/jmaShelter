<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Acompanhamento;
use App\Models\Adocao;
use App\Models\Animal;
use App\Models\Adotante;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AcompanhamentoTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_an_acompanhamento()
    {
        $animal = Animal::factory()->create();
        $adotante = Adotante::factory()->create();
        $adocao = Adocao::factory()->create([
            'animal_id' => $animal->id,
            'adotante_id' => $adotante->id,
        ]);

        $acompanhamento = Acompanhamento::create([
            'adocao_id' => $adocao->id,
            'data_visita' => '2024-01-15',
            'avaliacao_saude' => 'Saudável',
            'observacoes' => 'Animal bem cuidado.',
            'avaliacao_relacionamento' => 'Excelente',
        ]);

        $this->assertDatabaseHas('acompanhamentos', [
            'adocao_id' => $adocao->id,
            'avaliacao_saude' => 'Saudável',
        ]);
    }
}

