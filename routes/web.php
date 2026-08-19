<?php
use App\Http\Controllers\BarangayController;
use Illuminate\Support\Facades\Route;

Route::get('/barangay', [BarangayController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
