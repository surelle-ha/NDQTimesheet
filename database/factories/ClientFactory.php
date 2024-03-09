<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
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
            'client_name' => $this->faker->company, 
            'client_description' => $this->faker->sentence, 
            'client_sector' => $this->faker->word,
            'client_phone' => $this->faker->phoneNumber, 
            'client_address_1' => $this->faker->streetAddress, 
            'client_address_2' => $this->faker->secondaryAddress, 
            'client_city' => $this->faker->city, 
            'client_region' => $this->faker->state, 
            'client_zipcode' => $this->faker->postcode, 
            'client_country' => $this->faker->country,
            'client_status' => 'active', 
        ];
    }
}
