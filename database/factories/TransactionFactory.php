<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'account_num' => $this->faker->unique()->numerify('#####-###'),
            'deposit' => $this->faker->numerify('####.##'),
            'withdrawal' => $this->faker->numerify('####.##'),
            'transfer' => $this->faker->numerify('####.##'),
            
            
        ];
    }
}
