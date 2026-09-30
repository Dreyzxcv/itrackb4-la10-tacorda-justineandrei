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
        return view('barangay.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'             => 'required|string|max:255',
            'municipality' => 'required|in:Virac,San Andres,San Miguel,Viga,Bato,Caramoran,Gigmoto,Pandan,Panganiban,Baras,Bagamanoc',
            'population'       => 'required|integer|min:0',
            'barangay_captain' => 'required|string|max:255',
        ]);

        $barangays = $this->barangays();

        $id = max(array_keys($barangays)) + 1;

        $barangays[$id] = [
            'id'               => $id,
            'name'             => $validated['name'],
            'municipality'     => $validated['municipality'],
            'population'       => (int)$validated['population'],
            'barangay_captain' => $validated['barangay_captain'],
        ];

        $this->saveBarangays($barangays);

        return redirect()
            ->route('barangay.index')
            ->with('success', 'Barangay created successfully.');

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
        $path = storage_path('app/barangays.json');
        return json_decode(file_get_contents($path), true);
    }

    private function saveBarangays(array$barangays)
    {
        $path = storage_path('app/barangays.json');
        file_put_contents($path, json_encode($barangays, JSON_PRETTY_PRINT));
    }
}