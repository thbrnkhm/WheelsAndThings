<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\VehicleMake;
use App\Models\VehicleModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'vehicle_make_id' => VehicleMake::factory(),
            'vehicle_model_id' => VehicleModel::factory(),
            'price' => fake()->randomFloat(2, 10000, 5000000),
            'mileage' => fake()->randomFloat(2, 0, 400000),
            'year' => fake()->year(),
            'condition' => fake()->randomElement(['Brand New', 'Used']),
            'description' => fake()->sentence(),
        ];
    }
}
