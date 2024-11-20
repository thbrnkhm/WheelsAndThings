<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\VehicleImage;
use App\Models\VehicleMake;
use App\Models\VehicleModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{
    public function index(Request $request)
    {
        // get the results of all vehicles
        // return view('welcome',['vehicles' => Vehicle::with('user', 'make', 'model', 'images')->paginate(15)]);

        // $query = Vehicle::with(['user', 'make', 'model', 'images']);

        // return all cars
        return view('vehicles.index', [
            'vehicles' => Vehicle::where('user_id', Auth::id())
                ->with(['user', 'make', 'model', 'images'])
                ->latest()
                ->paginate(12),
            // 'makes' => VehicleMake::all(),
            // 'models' => VehicleModel::all(),
        ]);

        // dd(Vehicle::with(['user', 'make', 'model', 'images'])->images->toArray()); // Add this temporarily to your controller to debug
    }

    // show specific vehicle item
    public function show($id)
    {

        // grab the id
        $vehicle = Vehicle::with(['user', 'make', 'model', 'images'])->findOrFail($id);

        return view('vehicles.show', [
            'vehicle' => $vehicle
        ]);
    }

    public function create()
    {

        // validation stuffies
        request()->validate([
            'make' => ['required', 'string', 'max:255'],
            'model' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'images' => ['required'],
            'price' => ['required', 'numeric'],
            'mileage' => ['required', 'integer'],
            'year' => ['required', 'integer'],
            'condition' => ['required'],
        ]);

        // Find or create make - CORRECT WAY
        $make = VehicleMake::firstOrCreate(
            ['name' => request('make')]
        );

        // Find or create model - CORRECT WAY
        $model = VehicleModel::firstOrCreate(
            [
                'vehicle_make_id' => $make->id,
                'name' => request('model')
            ]
        );

        $vehicle = Vehicle::create([
            'user_id' => Auth::id(),
            'vehicle_make_id' => $make->id,
            'vehicle_model_id' => $model->id,
            'price' => request('price'),
            'mileage' => request('mileage'),
            'year' => request('year'),
            'condition' => request('condition'),
            'description' => request('description'),
        ]);

        VehicleImage::create([
            'vehicle_id' => $vehicle->id,
            'path' => request('images'),
        ]);

        // return to vehicle.index
        return redirect('vehicles')->with('success', 'Vehicle created successfully!');
    }

    public function edit($id)
    {
        // grab the id
        $vehicle = Vehicle::with(['user', 'make', 'model', 'images'])->findOrFail($id);

        return view('vehicles.edit', [
            'vehicle' => $vehicle
        ]);

        // return view('vehicles.edit');
    }

    public function update()
    {
        // validate
        request()->validate([
            'make' => ['required', 'string', 'max:255'],
            'model' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'images' => ['required'],
            'price' => ['required', 'numeric'],
            'mileage' => ['required', 'integer'],
            'year' => ['required', 'integer'],
            'condition' => ['required'],
        ]);

        // authorize

        // update
        
        // persist
        // redirect
    }

    public function destroy() {}
}
