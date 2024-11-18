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
        VehicleMake::factory(10)->create();
        VehicleModel::factory(10)->create();
        Vehicle::factory(10)->create();
        VehicleImage::factory(10)->create();
    }
}
