@extends('layouts.app')

@section('title', 'Create New Barangay')

@section('content')
    <div class="card">
        <div class="card-body">
            <h2>Create New Barangay</h2>

            <form method="POST" action="{{ route('barangay.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Barangay Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="municipality" class="form-label">Municipality</label>
                    <select name="municipality" id="municipality" class="form-control">
                        <option value="">Select Municipality</option>
                        <option value="Virac" @selected(old('municipality') === 'Virac')>Virac</option>
                        <option value="Bato" @selected(old('municipality') === 'Bato')>Bato</option>
                        <option value="San Andres" @selected(old('municipality') === 'San Andres')>San Andres</option>
                        <option value="Viga" @selected(old('municipality') === 'Viga')>Viga</option>
                        <option value="Bagamanoc" @selected(old('municipality') === 'Bagamanoc')>Bagamanoc</option>
                        <option value="Pandan" @selected(old('municipality') === 'Pandan')>Pandan</option>
                        <option value="Caramoran" @selected(old('municipality') === 'Caramoran')>Caramoran</option>
                        <option value="Baras" @selected(old('municipality') === 'Baras')>Baras</option>
                        <option value="San Miguel" @selected(old('municipality') === 'San Miguel')>San Miguel</option>
                        <option value="Panganiban" @selected(old('municipality') === 'Panganiban')>Panganiban</option>
                        <option value="Gigmoto" @selected(old('municipality') === 'Gigmoto')>Gigmoto</option>
                    </select>
                    @error('municipality')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="population" class="form-label">Population</label>
                    <input type="number" class="form-control" id="population" name="population" value="{{ old('population') }}">
                    @error('population')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="barangay_captain" class="form-label">Barangay Captain</label>
                    <input type="text" class="form-control" id="barangay_captain" name="barangay_captain" value="{{ old('barangay_captain') }}">
                    @error('barangay_captain')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Create Barangay</button>
                <a href="{{ route('barangay.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection