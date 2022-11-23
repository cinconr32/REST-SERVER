<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::factory()
        ->count(15)
        ->hasTagihan(1)
        ->create();

        Customer::factory()
        ->count(10)
        ->hasTagihan(2)
        ->create();

        Customer::factory()
        ->count(5)
        ->hasTagihan(3)
        ->create();
    }
}
