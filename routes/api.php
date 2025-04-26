<?php

use App\Http\Controllers\AmenityController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UnitAmenityController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UnitFavoriteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;








Route::post('/register', RegisterController::class);

Route::post('/login', LoginController::class);


Route::group(['middleware' => 'auth:api'], function () {
    Route::apiResource('/units', UnitController::class)->except(['index']);
    Route::get('/units', [UnitController::class, 'index'])->name('units.index')->withoutMiddleware('auth:api');
    Route::apiResource('/locations', LocationController::class)->except(['index']);
    Route::get('/locations', [LocationController::class, 'index'])->name('locations.index')->withoutMiddleware('auth:api');
    Route::apiResource('/developers', DeveloperController::class)->except(['index']);
    Route::get('/developers', [DeveloperController::class, 'index'])->name('developers.index')->withoutMiddleware('auth:api');
    Route::apiResource('/unit_favorite', UnitFavoriteController::class)->except(['update']);
    Route::apiResource('/amenity', AmenityController::class)->except(['index']);
    Route::get('/amenity', [AmenityController::class, 'index'])->name('amenities.index')->withoutMiddleware('auth:api');

    Route::prefix('units/{unit}/amenities')->group(function () {
        Route::post('/', [UnitAmenityController::class, 'store']); // Attach amenities to a unit
        Route::get('/', [UnitAmenityController::class, 'show']); // List amenities of a unit
        Route::put('/', [UnitAmenityController::class, 'update']); // Update amenities for a unit
        Route::delete('/', [UnitAmenityController::class, 'destroy']); // Detach amenities from a unit
    });
    Route::get('/amenities', [UnitAmenityController::class, 'index'])->withoutMiddleware('auth:api'); // List amenities of a unit
    Route::apiResource('/reservations', ReservationController::class)->except(['index']);
    Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index')->withoutMiddleware('auth:api');
    Route::apiResource('/project', ProjectController::class)->except(['index']);
    Route::get('/project', [ProjectController::class, 'index'])->name('projects.index')->withoutMiddleware('auth:api');
});
