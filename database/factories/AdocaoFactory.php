<?php

namespace Database\Factories;

use App\Models\Animal;
use App\Models\Adotante;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adocao>
 */
class AdocaoFactory extends Factory
{
    protected $model = \App\Models\Adocao::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'animal_id' => Animal::factory(),
            'adotante_id' => Adotante::factory(),
            'data_adocao' => $this->faker->date(),
        ];
    }
}
