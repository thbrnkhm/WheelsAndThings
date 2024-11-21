<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vehicle;
use App\Models\VehicleImage;
use App\Models\VehicleMake;
use App\Models\VehicleModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */


    public function run(): void
    {
        User::factory()->create([
            'fullname' => 'Bihgg Raga',
            'surname' => 'Greezus',
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        // add all vehicle makes
        $makeList = [
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
        foreach ($makeList as $make) {
            VehicleMake::create(['name' => $make]);
        }
        
        VehicleModel::factory(10)->create();
        Vehicle::factory(10)->create();
        VehicleImage::factory(10)->create();
    }
}
