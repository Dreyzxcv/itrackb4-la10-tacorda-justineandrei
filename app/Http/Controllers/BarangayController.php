<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangayController extends Controller
{
    public function index() 
    {
        $barangays = [
            ['name' => 'Palnab del Norte', 'municipality' => 'Virac', 'population' => '1000'],
            ['name' => 'Palnab del Sur', 'municipality' => 'Virac', 'population' => '1001'],
            ['name' => 'Gogon Centro', 'municipality' => 'Virac', 'population' => '1002'],
            ['name' => 'Gogon Sirangan', 'municipality' => 'Virac', 'population' => '1003'],
            ['name' => 'Gogon Tiad', 'municipality' => 'Virac', 'population' => '1004'],
        ];

        return view('barangay.index', ['barangays' => $barangays]);
    }
}
