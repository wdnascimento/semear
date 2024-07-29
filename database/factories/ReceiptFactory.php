<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Receipt>
 */
class ReceiptFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // id, payer, reference, value, created_at, updated_at
        return [
            'payer' => fake()->name(),
            'reference' => fake()->sentence($nbWords = 6, $variableNbWords = true) ,
            'value' => fake()->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5000),
            'created_at' => fake()->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = 'America/Sao_Paulo')
        ];
    }
}
