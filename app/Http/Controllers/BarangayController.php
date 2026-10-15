<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barangay;

class BarangayController extends Controller
{

    public function index(Request $request)
    {
        $barangays = Barangay::all();
        return view('barangay.index', compact('barangays'));
    }

    public function create()
    {
        return view('barangay.create');
    }

    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'name'             => 'required|string|max:255',
        //     'municipality' => 'required|in:Virac,San Andres,San Miguel,Viga,Bato,Caramoran,Gigmoto,Pandan,Panganiban,Baras,Bagamanoc',
        //     'population'       => 'required|integer|min:0',
        //     'barangay_captain' => 'required|string|max:255',
        // ]);

        // $barangays = $this->barangays();

        // $id = max(array_keys($barangays)) + 1;

        // $barangays[$id] = [
        //     'id'               => $id,
        //     'name'             => $validated['name'],
        //     'municipality'     => $validated['municipality'],
        //     'population'       => (int)$validated['population'],
        //     'barangay_captain' => $validated['barangay_captain'],
        // ];

        // $this->saveBarangays($barangays);

        // return redirect()
        //     ->route('barangay.index')
        //     ->with('success', 'Barangay created successfully.');

    }

    public function show(string $id)
    {
        $barangay = Barangay::findOrFail($id);
        return view('barangay.show', compact('barangay'));
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
}