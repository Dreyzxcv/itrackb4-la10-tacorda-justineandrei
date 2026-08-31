<?php
use App\Http\Controllers\BarangayController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/barangay', [BarangayController::class, 'index'])
    ->name('barangay.index');

Route::get('/barangay/featured', [BarangayController::class, 'featured'])
    ->name('barangay.featured');

Route::get('barangay/filter/{municipality?}', [BarangayController::class, 'filter'])
    ->name('barangay.filter');

Route::get('/barangay/{id}', [BarangayController::class, 'show'])
    ->name('barangay.show');