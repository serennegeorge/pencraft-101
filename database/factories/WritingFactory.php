<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Writing>
 */
class WritingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = ['stories', 'articles', 'poems'];

        return [
            'type' => $types[fake()->numberBetween(0, 2)],
            'title' => fake()->realText(fake()->numberBetween(20, 40)),
            'description' => fake()->paragraph(fake()->numberBetween(1, 4)),
            'image' => '[image location here]',
            'read_time' => fake()->numberBetween(1, 10),
            'read_unit' => 'minutes',
        ];
    }
}