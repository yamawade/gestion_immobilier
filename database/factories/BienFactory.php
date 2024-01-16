<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bien>
 */
class BienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->word,
            'categorie' => $this->faker->word,
            'description' => $this->faker->sentence,
            'adresse' => $this->faker->address,
            'statut' => $this->faker->randomElement(['disponible', 'indisponible']),
            'dimension_bien' => $this->faker->randomNumber(3),
            'espace_vert' => $this->faker->word,
            'nombre_balcon' => $this->faker->randomNumber(1),
            'nombre_toilette' => $this->faker->randomNumber(1),
            'user_id' => 1,
            'nombre_chambre' => $this->faker->randomNumber(1),
            'image'=>'image_bien.png'

        ];
    }

    public function test():BienFactory
    {
        return $this->state(
            [
                'nom' => $this->faker->word,
                'categorie' => $this->faker->word,
                'description' => $this->faker->sentence,
                'adresse' => $this->faker->address,
                'statut' => $this->faker->randomElement(['disponible', 'indisponible']),
                'dimension_bien' => $this->faker->randomNumber(3),
                'espace_vert' => $this->faker->word,
                'nombre_balcon' => $this->faker->randomNumber(1),
                'nombre_toilette' => $this->faker->randomNumber(1),
                'user_id' => 1,
                'nombre_chambre' => $this->faker->randomNumber(1),
                'image'=>'image_bien.png'
            ]
            );
    }
}
