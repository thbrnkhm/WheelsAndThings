<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\VehicleMake;
use App\Models\VehicleModel;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Validate the search query
        $query = $request->input('query');

        if (empty($query)) {
            return view('search', [
                'query' => '',
                'makes' => collect(),
                'models' => collect(),
                'vehicles' => collect(),
            ]);
        }

        // Search makes with eager loading
        $makes = VehicleMake::where('name', 'LIKE', "%{$query}%")
            ->with(['models', 'vehicles' => function ($query) {
                $query->with(['images', 'user']);
            }])
            ->get();

        // Search models with eager loading
        $models = VehicleModel::where('name', 'LIKE', "%{$query}%")
            ->with(['make', 'vehicles' => function ($query) {
                $query->with(['images', 'user']);
            }])
            ->get();

        // Search vehicles with eager loading
        $vehicles = Vehicle::where(function ($q) use ($query) {
            $q->where('year', 'LIKE', "%{$query}%")
                ->orWhere('price', 'LIKE', "%{$query}%")
                ->orWhereHas('make', function ($q) use ($query) {
                    $q->where('name', 'LIKE', "%{$query}%");
                })
                ->orWhereHas('model', function ($q) use ($query) {
                    $q->where('name', 'LIKE', "%{$query}%");
                });
        })
            ->with(['make', 'model', 'images', 'user'])
            ->get();

        return view('search', [
            'query' => $query,
            'makes' => $makes,
            'models' => $models,
            'vehicles' => $vehicles,
        ]);
    }
}
