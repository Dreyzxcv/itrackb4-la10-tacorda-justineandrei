<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangayController extends Controller
{

    public function index(Request $request)
    {
        $municipality = $request->query('municipality', 'all');
        $captain = $request->query('captain', 'all');

        $all = $this->barangays();

        if ($municipality === 'all') {
            $barangays = $all;
        } else {
            $barangays = [];
            foreach ($all as $id => $barangay) {
                if (strtolower($barangay['municipality']) === strtolower($municipality)) {
                    $barangays[$id] = $barangay;
                }
            }
        }

        if ($captain !== 'all') {
            $filtered = [];
            foreach ($barangays as $id => $barangay) {
                if (strtolower($barangay['barangay_captain']) === strtolower($captain)) {
                    $filtered[$id] = $barangay;
                }
            }
            $barangays = $filtered;
        }

        return view('barangay.index', [
            'barangays'    => $barangays,
            'municipality' => $municipality,
            'captain'      => $captain,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        $barangays = $this->barangays();
        if (!isset($barangays[$id])) {
            abort(404);
        }
        $barangay = $barangays[$id];
        return view('barangay.show', ['barangay' => $barangay]);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    public function featured()
    {
        $barangays = $this->barangays();
        $barangay = $barangays[1];
        return view('barangay.featured', ['barangay' => $barangay]);
    }

    private function barangays()
    {
        return [
            1 => ['id' => 1, 'name' => 'Palnab del Norte', 'municipality' => 'Virac', 'population' => '435', 'barangay_captain' => 'Justine Andrei Tacorda'],
            2 => ['id' => 2, 'name' => 'Palnab del Sur', 'municipality' => 'Virac', 'population' => '543', 'barangay_captain' => 'Lenard Gil Llorca'],
            3 => ['id' => 3, 'name' => 'Gogon Centro', 'municipality' => 'Virac', 'population' => '1202', 'barangay_captain' => 'John Hermie Tatel'],
            4 => ['id' => 4, 'name' => 'Magnesia del Norte', 'municipality' => 'Virac', 'population' => '212', 'barangay_captain' => 'Khaliq Aguilar'],
            5 => ['id' => 5, 'name' => 'Francia', 'municipality' => 'Virac', 'population' => '1123', 'barangay_captain' => 'Mikko Bobier'],
            6 => ['id' => 6, 'name' => 'Cabugao', 'municipality' => 'Bato', 'population' => '982', 'barangay_captain' => 'Jun Amaro'],
        ];
    }
}