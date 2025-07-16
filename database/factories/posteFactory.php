<?php

namespace Database\Factories;

use App\Models\Employe;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Poste>
 */
class posteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Intitule' => $this->faker->word,
            'Description' => $this->faker->sentence,
            'Niveau_hierarchique' => $this->faker->word,
            'employe_id' => Employe::factory(),
        ];
    }
}
