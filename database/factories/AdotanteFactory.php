<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adotante>
 */
class AdotanteFactory extends Factory
{
    protected $model = \App\Models\Adotante::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cpf' => $this->faker->unique()->numerify('###########'),
            'nome' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'endereco' => $this->faker->address,
            'telefone' => $this->faker->phoneNumber,
            'data_nascimento' => $this->faker->date(),
        ];
    }
}
