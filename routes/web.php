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

// Post Route.
Route::post( '/add', [DashboardController::class, 'addProfile'] );


// File Upload Route.
Route::post( '/upload-file', [DashboardController::class, 'uploadFiles'] );

// API Route.
Route::post( '/contentType', [DashboardController::class, 'contentType'] );

// Cookie Route.
Route::post( '/setCookies', [DashboardController::class, 'setCookies'] );
