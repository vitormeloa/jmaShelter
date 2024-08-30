<?php

namespace Database\Factories;

use App\Models\Adocao;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Acompanhamento>
 */
class AcompanhamentoFactory extends Factory
{
    protected $model = \App\Models\Acompanhamento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'adocao_id' => Adocao::factory(),
            'data_visita' => $this->faker->date(),
            'avaliacao_saude' => $this->faker->sentence,
            'observacoes' => $this->faker->paragraph,
            'avaliacao_relacionamento' => $this->faker->randomElement(['Excelente', 'Bom', 'Regular', 'Ruim']),
        ];
    }
}
