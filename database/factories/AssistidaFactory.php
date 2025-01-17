<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assistida>
 */
class AssistidaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('pt_BR');

        return [
            'nome' => $faker->firstNameFemale,
            'idade' => $faker->numberBetween(18, 45),
            'telefone' => $faker->phoneNumber,
            'logradouro' => $faker->streetName,
            'numero' => $faker->buildingNumber,
            'quadra' => null,
            'bloco' => null,
            'apartamento' => null,
            'bairro' => $faker->citySuffix,
            'complemento' => $faker->secondaryAddress,
            'municipio' => $faker->city,
        ];
    }
}
