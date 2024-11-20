<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(
    function () {
        Route::get('/', 'index')->name('welcome');
    }
);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('vehicles.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(VehicleController::class)->group(
    function () {
        Route::get('vehicles', 'index')->middleware(['auth', 'verified'])->name('vehicles');
        Route::post('/vehicles', 'create')->name('vehicles.index');
        Route::get('/vehicles/{id}', 'show')->name('vehicles.show');
        Route::get('/vehicles/{id}/edit', 'edit')->name('vehicles.edit');
        Route::patch('/vehicles/{id}', 'update')->name('vehicles.update');
        Route::delete('/vehicles/{id}', 'destroy')->name('vehicles.destroy');
    }
);

require __DIR__ . '/auth.php';
