<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\VehicleMake;
use App\Models\VehicleModel;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index(Request $request){
        // get the results of all vehicles
        // return view('welcome',['vehicles' => Vehicle::with('user', 'make', 'model', 'images')->paginate(15)]);

        $query = Vehicle::with(['user', 'make', 'model', 'images']);

        // return all cars
        return view('vehicles.index', [
            'vehicles' => $query->latest()->paginate(12),
            'makes' => VehicleMake::all(),
            'models' => VehicleModel::all(),
        ]);
    }
    
}
