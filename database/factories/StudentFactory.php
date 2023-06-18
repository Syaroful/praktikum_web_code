<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'nim' => $this->faker->unique()->numerify('2141720###'),
            'kelas' => $this->faker->randomElement(['1A', '1B', '2A', '2B']),
            'jurusan' => $this->faker->randomElement(['Teknik Informatika', 'Sistem Informasi']),
            'nomor_hp' => $this->faker->unique()->numerify('08##-####-####'),
        ];
    }
}
