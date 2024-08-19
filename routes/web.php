<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard Route.
Route::get( '/dashboard', [DashboardController::class, 'dashboard'] );

/**
 * Route with parameter.
 * After Parameter ? sign will show that this will take empty value.
*/
//Route::get( '/dashboard/profile/{id}', [DashboardController::class, 'profile'] );
Route::get( '/dashboard/profile/{id?}', [DashboardController::class, 'profile'] );
