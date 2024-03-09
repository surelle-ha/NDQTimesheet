<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id' => Str::random(10),
            'project_id' => Str::random(10),
            'project_name' => 'Team ' . $this->faker->jobTitle,
            'project_description' => $this->faker->paragraph,
            'project_status' => $this->faker->randomElement(['Active', 'Inactive']),
        ];
    }
}
