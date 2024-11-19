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

        $query = Vehicle::with(['make', 'model', 'images']);

        // Apply filters
        if ($request->filled('make')) {
            $query->where('make_id', $request->make);
        }

        if ($request->filled('model')) {
            $query->where('model_id', $request->model);
        }

        if ($request->filled('year')) {
            $query->where('year', $request->year);
        }

        if ($request->filled('price_range')) {
            [$min, $max] = explode('-', $request->price_range . '+');
            $query->when($max === '+', 
                fn($q) => $q->where('price', '>=', $min),
                fn($q) => $q->whereBetween('price', [$min, $max])
            );
        }

        return view('vehicles.index', [
            'vehicles' => $query->latest()->paginate(12),
            'makes' => VehicleMake::all(),
            'models' => VehicleModel::all(),
        ]);
    }
    
}
