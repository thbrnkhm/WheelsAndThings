<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
    /** @use HasFactory<\Database\Factories\VehicleModelFactory> */
    use HasFactory;

    protected $fillable = ['vehicle_make_id','name'];

    // protected $gaurded = [];


    public function make()
    {
        return $this->belongsTo(VehicleMake::class);
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
