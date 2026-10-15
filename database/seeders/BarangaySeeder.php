<?php

namespace Database\Seeders;

use App\Models\Barangay;
use Illuminate\Database\Seeder;

class BarangaySeeder extends Seeder
{
    public function run(): void
    {
        Barangay::create([
            'name' => 'Palnab del Norte',
            'municipality' => 'Virac',
            'population' => 435,
            'barangay_captain' => 'Justine Andrei Tacorda',
            'is_coastal' => true,
            'landmark' => 'Palnab Beach',
        ]);

        Barangay::create([
            'name' => 'Palnab del Sur',
            'municipality' => 'Virac',
            'population' => 325,
            'barangay_captain' => 'Lenard Gil Llorca',
            'is_coastal' => true,
            'landmark' => 'Palnab Beach',
        ]);

        Barangay::create([
            'name' => 'Cabugao',
            'municipality' => 'Bato',
            'population' => 300,
            'barangay_captain' => 'Jun Amaro',
            'is_coastal' => true,
            'landmark' => 'Cabugao Beach',
        ]);

        Barangay::create([
            'name' => 'Capilihan',
            'municipality' => 'Virac',
            'population' => 537,
            'barangay_captain' => 'Ronnie Vargas',
            'is_coastal' => false,
            'landmark' => 'Capilihan Elementary School',
        ]);

        Barangay::create([
            'name' => 'Cavinitan',
            'municipality' => 'Virac',
            'population' => 1203,
            'barangay_captain' => 'John Hermie Tatel',
            'is_coastal' => false,
            'landmark' => null,
        ]);
    }
}