<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Absence>
 */
class absenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employe_id' => \App\Models\Employe::factory(),
            'Date_debut' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'Date_fin' => $this->faker->dateTimeBetween('now', '+1 month'),
            'Type' => $this->faker->sentence,
            'Statut' => $this->faker->randomElement(['En attente', 'Approuvé', 'Rejeté']),
        ];
    }
}
