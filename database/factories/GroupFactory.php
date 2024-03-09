<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'project_id' => $this->faker->numberBetween(1, 100),
            'group_id' => $this->faker->unique()->numberBetween(1, 1000),
            'group_name' => $this->faker->words(3, true), 
            'group_description' => $this->faker->sentence(), 
            'group_status' => $this->faker->randomElement(['Active', 'Inactive', 'Pending']), 
        ];
    }
}
