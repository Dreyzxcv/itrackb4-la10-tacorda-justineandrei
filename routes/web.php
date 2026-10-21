<?php

use App\Http\Controllers\BarangayController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('barangay.index');
});

Route::get('/barangay/featured', [BarangayController::class, 'featured'])
    ->name('barangay.featured');

Route::get('/barangay/filter/{municipality?}', function ($municipality = null) {
    return redirect()->route('barangay.index', ['municipality' => $municipality ?? 'all']);
})
->name('barangay.filter');

Route::resource('barangay', BarangayController::class)
    ->only(['index', 'show', 'create', 'store']);

