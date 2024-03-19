<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start_time = fake()->dateTime();
        $end_time = clone $start_time;
        $end_time->modify('+1 hour');

        return [
            'title' => fake()->word(),
            'description' => fake()->text(200),
            'date' => fake()->dayOfWeek(),
            'start_time' => $start_time,
            'end_time' => $end_time,
        ];
    }
}
