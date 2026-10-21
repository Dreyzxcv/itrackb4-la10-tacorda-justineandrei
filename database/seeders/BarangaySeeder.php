<?php

namespace Database\Seeders;

use App\Models\Barangay;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class BarangaySeeder extends Seeder
{
    public function run(): void
    {
        $a = Municipality::create(['name' => 'Virac']);
        $b = Municipality::create(['name' => 'Bato']);
        $c = Municipality::create(['name' => 'Gigmoto']);

        Barangay::create([
            'name' => 'Palnab del Norte',
            'municipality_id' => $a->id,
            'population' => 435,
            'barangay_captain' => 'Justine Andrei Tacorda',
            'is_coastal' => true,
            'landmark' => 'Palnab Beach',
        ]);

        Barangay::create([
            'name' => 'Palnab del Sur',
            'municipality_id' => $a->id,
            'population' => 325,
            'barangay_captain' => 'Lenard Gil Llorca',
            'is_coastal' => true,
            'landmark' => 'Palnab Beach',
        ]);

        Barangay::create([
            'name' => 'Cabugao',
            'municipality_id' => $b->id,
            'population' => 300,
            'barangay_captain' => 'Jun Amaro',
            'is_coastal' => true,
            'landmark' => 'Cabugao Beach',
        ]);

        Barangay::create([
            'name' => 'Capilihan',
            'municipality_id' => $a->id,
            'population' => 537,
            'barangay_captain' => 'Ronnie Vargas',
            'is_coastal' => false,
            'landmark' => 'Capilihan Elementary School',
        ]);

        Barangay::create([
            'name' => 'District 1',
            'municipality_id' => $c->id,
            'population' => 1203,
            'barangay_captain' => 'John Hermie Tatel',
            'is_coastal' => false,
            'landmark' => null,
        ]);
    }
}