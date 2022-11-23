<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tagihan>
 */
class TagihanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $status = $this->faker->randomElement(['Terbayar', 'Belum Bayar']);

        return [
            'customer_id' => Customer::factory(),
            'jenis' => $this->faker->randomElement(['Internet', 'Listrik', 'PDAM']),
            'jumlah' => $this->faker->numberBetween(100000, 450000),
            'status' => $status,
            'tanggal_bayar' => $status == 'Terbayar' ? $this->faker->dateTimeThisDecade() : NULL
        ];
    }
}
