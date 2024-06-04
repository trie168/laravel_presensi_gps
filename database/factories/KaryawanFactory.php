<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\karyawan>
 */
class KaryawanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nik' => $this->faker->unique()->numberBetween(1000000000, 9999999999),
            'nama' => $this->faker->name(),
            'jabatan' => $this->faker->jobTitle(),
            'departemen' => $this->faker->word(),
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
            'alamat' => $this->faker->address(),
            'no_hp' => $this->faker->e164PhoneNumber(),
            'password' => bcrypt('789789'),
        ];
    }
}
