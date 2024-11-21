<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VehicleMake>
 */
class VehicleMakeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $makeList = [
        'Acura',
        'Alfa Romeo',
        'Aston Martin',
        'Audi',
        'Bentley',
        'BMW',
        'Buick',
        'Cadillac',
        'Chevrolet',
        'Chrysler',
        'Citroën',
        'Dacia',
        'Daewoo',
        'Dodge',
        'Ferrari',
        'Fiat',
        'Ford',
        'Genesis',
        'GMC',
        'Honda',
        'Hyundai',
        'Infiniti',
        'Jaguar',
        'Jeep',
        'Kia',
        'Lamborghini',
        'Land Rover',
        'Lexus',
        'Lincoln',
        'Lotus',
        'Maserati',
        'Mazda',
        'McLaren',
        'Mercedes-Benz',
        'MG',
        'Mini',
        'Mitsubishi',
        'Nissan',
        'Opel',
        'Peugeot',
        'Porsche',
        'Ram',
        'Renault',
        'Rolls-Royce',
        'Seat',
        'Skoda',
        'Smart',
        'Subaru',
        'Suzuki',
        'Tesla',
        'Toyota',
        'Volkswagen',
        'Volvo',
    ];
    
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement($this->makeList),
        ];
    }
}
