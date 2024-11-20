<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleImage extends Model
{
    /** @use HasFactory<\Database\Factories\VehicleImageFactory> */
    use HasFactory;

    protected $fillable = ['vehicle_id', 'path'];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
