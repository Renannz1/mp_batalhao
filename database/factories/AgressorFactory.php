<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agressor>
 */
class AgressorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->firstNameMale,
            'idade' => $this->faker->numberBetween(18, 45),
            'telefone' => $this->faker->phoneNumber,
            'logradouro' => $this->faker->streetName,
            'numero' => $this->faker->buildingNumber,
            'quadra' => null,
            'bloco' => null,
            'apartamento' => null,
            'bairro' => $this->faker->citySuffix,
            'complemento' => $this->faker->secondaryAddress,
            'municipio' => $this->faker->city,
        ];
    }
}
