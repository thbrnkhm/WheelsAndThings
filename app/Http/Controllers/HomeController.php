<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\VehicleMake;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        return view('welcome', [
            'makes' => VehicleMake::all(),
            'latestVehicles' => Vehicle::with(['user', 'make', 'model', 'images'])
                ->latest()
                ->take(4)
                ->get(),
        ]);
    }
}
