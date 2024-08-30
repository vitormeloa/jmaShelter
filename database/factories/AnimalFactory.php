<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    protected $model = \App\Models\Animal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'especie' => $this->faker->randomElement(['Cachorro', 'Gato']),
            'raca' => $this->faker->word,
            'data_chegada' => $this->faker->date(),
            'descricao' => $this->faker->paragraph,
            'vacinado' => $this->faker->boolean,
            'castrado' => $this->faker->boolean,
            'status' => $this->faker->randomElement(['disponivel', 'indisponivel']),
        ];
    }
}
