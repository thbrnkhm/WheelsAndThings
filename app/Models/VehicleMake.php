<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleMake extends Model
{
    /** @use HasFactory<\Database\Factories\VehicleMakeFactory> */
    use HasFactory;

    // protected $gaurded = [];
    protected $fillable = ['name'];

    // relationships
    public function models()
    {
        return $this->hasMany(VehicleModel::class);
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
