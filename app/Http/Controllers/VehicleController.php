<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehicle;
use App\Models\VehicleImage;
use App\Models\VehicleMake;
use App\Models\VehicleModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class VehicleController extends Controller
{
    // public function index(Request $request)
    // {
    //     // get the results of all vehicles
    //     // return view('welcome',['vehicles' => Vehicle::with('user', 'make', 'model', 'images')->paginate(15)]);

    //     // $query = Vehicle::with(['user', 'make', 'model', 'images']);

    //     // return all cars
    //     return view('vehicles.index', [
    //         'vehicles' => Vehicle::where('user_id', Auth::id())
    //             ->with(['user', 'make', 'model', 'images'])
    //             ->latest()
    //             ->paginate(12),
    //         // 'makes' => VehicleMake::all(),
    //         // 'models' => VehicleModel::all(),
    //     ]);

    //     // dd(Vehicle::with(['user', 'make', 'model', 'images'])->images->toArray()); // Add this temporarily to your controller to debug
    // }

    public function index(Request $request)
    {
        $query = Vehicle::with(['make', 'model', 'images', 'user']);

        // Apply filters if they exist in the session
        if ($request->has('apply_filters')) {
            $filters = session('vehicle_filters', []);

            if (!empty($filters['make'])) {
                $query->whereHas('make', function ($q) use ($filters) {
                    $q->where('name', $filters['make']);
                });
            }

            if (!empty($filters['model'])) {
                $query->whereHas('model', function ($q) use ($filters) {
                    $q->where('name', $filters['model']);
                });
            }

            if (!empty($filters['year'])) {
                $yearRange = $this->parseYearRange($filters['year']);
                $query->whereBetween('year', $yearRange);
            }

            if (!empty($filters['price_range'])) {
                $priceRange = $this->parsePriceRange($filters['price_range']);
                $query->whereBetween('price', $priceRange);
            }

            if (!empty($filters['sort'])) {
                switch ($filters['sort']) {
                    case 'newest':
                        $query->orderBy('created_at', 'desc');
                        break;
                    case 'price_low_high':
                        $query->orderBy('price', 'asc');
                        break;
                    case 'price_high_low':
                        $query->orderBy('price', 'desc');
                        break;
                }
            }
        }

        $allVehicles = $query->paginate(12);
        $makes = VehicleMake::all();
        $activeFilters = session('vehicle_filters', []);

        return view('vehicles.index', compact('allVehicles', 'makes', 'activeFilters'));
    }

    public function addFilter(Request $request)
    {
        $filters = session('vehicle_filters', []);
        $filters[$request->type] = $request->value;
        session(['vehicle_filters' => $filters]);

        return response()->json([
            'success' => true,
            'filters' => $filters
        ]);
    }

    public function removeFilter(Request $request)
    {
        $filters = session('vehicle_filters', []);
        unset($filters[$request->type]);
        session(['vehicle_filters' => $filters]);

        return response()->json([
            'success' => true,
            'filters' => $filters
        ]);
    }

    private function parseYearRange($yearFilter)
    {
        // Add logic to parse year ranges like "2024 - 2020" into [2020, 2024]
        $parts = explode(' - ', $yearFilter);
        if (count($parts) === 2) {
            return [intval($parts[1]), intval($parts[0])];
        }
        return [intval($yearFilter), intval($yearFilter)];
    }

    private function parsePriceRange($priceFilter)
    {
        // Add logic to parse price ranges
        switch ($priceFilter) {
            case 'less than P10,000.00':
                return [0, 10000];
            case 'less than P50,000.00':
                return [0, 50000];
            case 'less than P200,000.00':
                return [0, 200000];
            case 'more than P200,000.00':
                return [200000, PHP_FLOAT_MAX];
            default:
                return [0, PHP_FLOAT_MAX];
        }
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

    public function create(Request $request)
    {

        // validation stuffies
        request()->validate([
            'make' => ['required', 'string', 'max:255'],
            'model' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'images' => [
                'required',
                'array',
                'min:5',
                'max:5'
            ],
            'images.*' => [
                'image',
                'mimes:jpeg,png,jpg,webp',
                'max:5120'
            ],
            'price' => ['required', 'numeric'],
            'mileage' => ['required', 'integer'],
            'year' => ['required', 'integer'],
            'condition' => ['required'],

        ], [
            // custom error messages
            'images.min' => 'You must upload at least 5 images.',
            'images.max' => 'You can upload a maximum of 5 images.',
            'images.*.image' => 'All files must be images.',
            'images.*.mimes' => 'Images must be in JPEG, PNG, JPG, or WEBP format.',
            'images.*.max' => 'Each image must be less than 5MB.'
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

        // Save each image
        foreach ($request->file('images') as $image) {
            $path = $image->store('vehicle_images', 'public'); // Save in 'storage/app/public/vehicle_images'
            VehicleImage::create([
                'vehicle_id' => $vehicle->id,
                'image_path' => $path,
            ]);
        }

        // return to vehicle.index
        return redirect('vehicles')->with('success', 'Vehicle created successfully!');
    }

    public function edit($id)
    {

        // grab the id
        $vehicle = Vehicle::with(['user', 'make', 'model', 'images'])->findOrFail($id);

        // reference our edit-vehicle gate
        Gate::authorize('edit-delete-vehicle', $vehicle);

        return view('vehicles.edit', [
            'vehicle' => $vehicle
        ]);
    }

    public function update(Request $request, $id)
    {
        // find the id
        $vehicle = Vehicle::findOrFail($id);

        // authorize
        Gate::authorize('edit-delete-vehicle', $vehicle);


        // validate
        request()->validate([
            'make' => ['required', 'string', 'max:255'],
            'model' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'images' => [
                'nullable', // not required during update
                'array',
                'min:5',
                'max:5'
            ],
            'images.*' => [
                'image',
                'mimes:jpeg,png,jpg,webp',
                'max:5120'
            ],
            'price' => ['required', 'numeric'],
            'mileage' => ['required', 'integer'],
            'year' => ['required', 'integer'],
            'condition' => ['required'],
        ]);

        // check if make already exists
        $make = VehicleMake::where('name', $request->input('make'))->first();
        if (!$make) {
            // create a new make if it doesnt exist
            $make = VehicleMake::create(['name' => $request->input('make')]);
        }

        // check if the requested model already exists under the selected make 
        $model = VehicleModel::where('name', $request->input('model'))
            ->where('vehicle_make_id', $make->id)
            ->first();
        if (!$model) {
            // create a new model if it doesn't exist
            $model = VehicleModel::create([
                'name' => $request->input('model'),
                'vehicle_make_id' => $make->id,
            ]);
        }

        $vehicle->update([
            'vehicle_make_id' => $make->id,
            'vehicle_model_id' => $model->id,
            'price' => $request->input('price'),
            'mileage' => $request->input('mileage'),
            'year' => $request->input('year'),
            'condition' => $request->input('condition'),
            'description' => $request->input('description'),
        ]);

        // lets check if the user uploaded some images
        if (request()->hasFile('images')) {
            // remove old images
            $vehicle->images()->delete();

            // save new images
            foreach (request()->file('images') as $image) {
                $path = $image->store('vehicle_images', 'public'); // store in public/vehicle_images
                // $vehicle->images()->create(['path' => $path]);

                VehicleImage::create([
                    'vehicle_id' => $vehicle->id,
                    'path' => $path
                ]);
            }
        }

        $vehicle->save();

        // redirect
        return redirect("/vehicles/$vehicle->id");
    }

    public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        // authorize
        Gate::authorize('edit-delete-vehicle', $vehicle);

        // delete vehicle
        $vehicle->delete();

        return redirect('/vehicles');
    }
}
