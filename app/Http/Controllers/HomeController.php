<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\VehicleMake;
use App\Models\VehicleModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        return view('welcome', [
            'makes' => VehicleMake::all(),
            'models' => VehicleModel::all(),
            'allVehicles' => Vehicle::with(['user', 'make', 'model', 'images'])
                ->latest()
                ->paginate(8),
        ]);
    }
}
