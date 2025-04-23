<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IntervalFactory extends Factory
{
    public function definition(): array
    {
        $start = $this->faker->numberBetween(-1000000, 1000000);

        $end = $this->faker->boolean(40) ? null : $this->faker->numberBetween($start + 1, $start + 100);

        return [
            'start' => $start,
            'end' => $end,
        ];
    }
}
