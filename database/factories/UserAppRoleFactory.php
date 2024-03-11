<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserAppRole>
 */
class UserAppRoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_app_role_title' => $this->faker->jobTitle,
            'user_app_role_description' => $this->faker->paragraph,
            'user_app_role_access' => $this->faker->randomElement(['SML', 'TSL']),
        ];
    }
}
