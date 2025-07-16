<?php

namespace Database\Factories;
use App\Models\Poste;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employe>
 */
class employeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nom' => $this->faker->lastName,
            'Prenom' => $this->faker->firstName,
            'Date_de_naissance' => $this->faker->date(),
            'Adresse' => $this->faker->address,
            'Email' => $this->faker->unique()->safeEmail,
            'Telephone' => $this->faker->phoneNumber,
            'Date_embauche' => $this->faker->date(),
            'Statut' => $this->faker->randomElement(['Actif', 'Inactif']),
            'poste_id' => Poste::factory(),
        ];
    }
}
