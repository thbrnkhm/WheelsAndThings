<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
    /** @use HasFactory<\Database\Factories\VehicleModelFactory> */
    use HasFactory;

    public function make()
    {
        return $this->belongsTo(VehicleMake::class);
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
