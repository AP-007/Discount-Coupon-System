<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CouponFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $start = $this->faker->dateTimeBetween('-1 week', '+1 week');
        $end = Carbon::parse($start)->addDays(7);
        return [
            'code' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'no_of_users' => $this->faker->randomDigitNotNull(),
            'is_global' => $this->faker->randomElement([0, 1]),
            'discount' => $this->faker->randomElement([10, 5, 20, 15, 25, 12]),
            'discount_type' => $this->faker->randomElement([0, 1]),
            'discount_limit' => $this->faker->randomDigitNotNull(),
            'start_date' => $start,
            'end_date' => $end
        ];
    }
}
