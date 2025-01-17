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
            // exemplo: 8002969-58.2023.8.05.0088
            'processo_sei' => $faker->regexify('[0-9]{7}-[0-9]{2}\.[0-9]{4}\.[0-9]{1}\.[0-9]{2}\.[0-9]{4}'),
            'medida_protetiva' => $faker->regexify('[0-9]{7}-[0-9]{2}\.[0-9]{4}\.[0-9]{1}\.[0-9]{2}\.[0-9]{4}'),
            'situacao' => $faker->randomElement(['Ativa', 'Encerrada', 'Renovada']),
            'nivel_risco' => $faker->randomElement(['Baixo', 'Medio', 'Alto']),
            'assistida_id' => Assistida::factory(),
            'agressor_id' => Agressor::factory(),
            'relacao_vitima_agressor' => $faker->randomElement(['Namorado', 'Marido', 'Ex-marido', 'Ex-namorado']),
            'restricoes_agressor' => $faker->randomElement(['Distancia de 100m', 'Distancia de 200m']),
            'inicio' => now(),
            'previsao_termino' => null,
            'renovacao' => null,
            'revogacao' => null,
        ];
    }
}
