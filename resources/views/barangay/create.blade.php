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
                    <label for="municipality_id" class="form-label">Municipality</label>

                    <select class="form-select" id="municipality_id" name="municipality_id">
                        <option value="">Select Municipality</option>

                        @foreach ($municipalities as $municipality)
                            <option
                                value="{{ $municipality->id }}"
                                @selected(old('municipality_id') == $municipality->id)
                            >
                                {{ $municipality->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('municipality_id')
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