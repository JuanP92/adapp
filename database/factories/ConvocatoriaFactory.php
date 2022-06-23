<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Convocatoria>
 */
class ConvocatoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'semestre' => 'II',
            'fecha_ini' => $this->faker->date(),
            'fecha_fin' => $this->faker->date(),
            'actividad_id' => $this->faker->numberBetween(3,8),
            'formato_id' => $this->faker->numberBetween(1,2)
        ];
    }
}
