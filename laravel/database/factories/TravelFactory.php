<?php

namespace Database\Factories;

use App\Models\Airline;
use App\Models\Flight;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Travel>
 */
class TravelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'flight_id'=>Flight::all()->random()->flight_id,
            'user_id'=>User::all()->random()->id,
            'evaulation'=>fake()->text()
        ];
    }
}
