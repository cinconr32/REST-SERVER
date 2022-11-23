<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'nik' => $this->faker->nik(),
            'jeniskelamin' => $this->faker->randomElement(['L', 'P']),
            'alamat' => $this->faker->address(),
            'no_telp' => $this->faker->phoneNumber()
        ];
    }
}
