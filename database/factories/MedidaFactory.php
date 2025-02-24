<?php

namespace Database\Factories;

use App\Models\Agressor;
use App\Models\Assistida;
use App\Models\Medida;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medida>
 */
class MedidaFactory extends Factory
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
            'processo_sei' => $faker->regexify('[0-9]{7}-[0-9]{2}\.[0-9]{4}\.[0-9]{1}\.[0-9]{2}\.[0-9]{4}'),
            'medida_protetiva' => $faker->regexify('[0-9]{7}-[0-9]{2}\.[0-9]{4}\.[0-9]{1}\.[0-9]{2}\.[0-9]{4}'),
            'situacao' => $faker->randomElement(['Ativa', 'Finalizada', 'Renovada']),
            'nivel_risco' => $faker->randomElement(['Baixo', 'Médio', 'Alto']),
            'assistida_id' => Assistida::inRandomOrder()->value('id'),
            'agressor_id' => Agressor::inRandomOrder()->value('id'),
            'relacao_vitima_agressor' => $faker->randomElement(['Cônjugue', 'Companheiro', 'Ex-Cônjugue', 'Ex-Companheiro', 'Familiar']),
            'restricoes_agressor' => $faker->randomElement(['Distancia de 100m', 'Distancia de 200m']),
            'inicio' => now(),
            'previsao_termino' => null,
            'renovacao' => null,
            'revogacao' => null,
        ];
    }
}
