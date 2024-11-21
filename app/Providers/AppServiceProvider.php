<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // define gate 

        Gate::define('edit-delete-vehicle', function (User $user, Vehicle $vehicle) {
            // return a boolean whether the user is authorized to edit a vehicle
            return $vehicle->user->is($user);
        });

    }
}
