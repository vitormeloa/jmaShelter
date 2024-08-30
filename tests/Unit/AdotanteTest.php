<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Adotante;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdotanteTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_an_adotante()
    {
        $adotante = Adotante::create([
            'cpf' => '123.456.789-00',
            'nome' => 'João Silva',
            'email' => 'joao@example.com',
            'endereco' => 'Rua Exemplo, 123',
            'telefone' => '(12) 3456-7890',
            'data_nascimento' => '1990-01-01',
        ]);

        $this->assertDatabaseHas('adotantes', [
            'cpf' => '123.456.789-00',
            'nome' => 'João Silva',
        ]);
    }
}
