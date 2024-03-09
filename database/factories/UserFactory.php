<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'internal_id' => Str::random(10),
            'external_id' => Str::random(10),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'birthday' => $this->faker->date,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'position' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph,
            'address_1' => $this->faker->streetAddress,
            'address_2' => $this->faker->secondaryAddress,
            'city' => $this->faker->city,
            'zipcode' => $this->faker->postcode,
            'country' => $this->faker->country,
            'contact_number' => $this->faker->phoneNumber,
            'emergency_number' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'),
            'role' => $this->faker->randomElement(['Employee', 'Administrator', 'Human Resource', 'Security Analyst', 'Tester']),
            'status' => $this->faker->randomElement(['Active', 'Inactive']),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
