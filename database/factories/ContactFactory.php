<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome_de_contato' => fake()->name(),
            'email_de_contato' => fake()->unique()->safeEmail(),
            'telefone_de_contato' => fake()->unique()->safeEmail(),
            'CEP' => fake()->unique()->postcode(),
            'estado' => 'Paraná',
            'cidade' => fake()->unique()->city(),
            'bairro' => 'Centro',
            'endereco' => fake()->unique()->streetName(),
            'numero' => fake()->unique()->buildingNumber(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
