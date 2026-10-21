<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barangay;
use App\Models\Municipality;
use Illuminate\Support\Facades\DB;

class BarangayController extends Controller
{

    
    public function index(Request $request)
    {
        DB::enableQueryLog();
        
        $municipalityId = $request->query('municipality_id');

        $query = Barangay::with('municipality');

        if ($municipalityId) {
            $query->where('municipality_id', $municipalityId);
        }

        $barangays = $query->get();
        $municipalities = Municipality::all();

        return view('barangay.index', compact(
            'barangays',
            'municipalities'
        ));
    }


    public function create()
    {
        $municipalities = Municipality::all();
        return view('barangay.create', compact('municipalities'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'             => 'required|string|max:255',
            'municipality_id' => 'required|exists:municipalities,id',
            'population'       => 'required|integer|min:0',
            'barangay_captain' => 'required|string|max:255',
            'is_coastal' => 'required|boolean',
            'landmark' => 'nullable|string|max:255',
        ]);

        Barangay::create($validated);

        return redirect()
            ->route('barangay.index')
            ->with('success', 'Barangay created successfully.');

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