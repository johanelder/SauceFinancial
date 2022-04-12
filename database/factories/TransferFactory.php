<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'account_num' => $this->faker->numerify('#####-###'),
            'email_sender' => $this->faker->unique()->safeEmail(),
            'email_receiver' => $this->faker->unique()->safeEmail(),
            'amount' => $this->faker->unique()->numerify('####.##'),
            
        ];
    }
}
