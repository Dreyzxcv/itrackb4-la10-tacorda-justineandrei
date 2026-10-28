@extends('layouts.app')

@section('title', 'All Barangays List')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h2>List of Barangays</h2>
        <a href="{{ route('barangay.create') }}" class="btn btn-primary">+ Add New Barangay</a>
    </div>

    <nav>
        <a href="{{ route('barangay.index') }}">All</a>
        @foreach ($municipalities as $municipality)
            <a href="{{ route('barangay.index', ['municipality_id' => $municipality->id]) }}">
                {{ $municipality->name }}
            </a>
        @endforeach
    </nav>

    <p><a href="{{ route('barangay.index') }}" class="btn btn-secondary btn-sm">Clear All Filters</a></p>

    <p>Queries: {{ count(\Illuminate\Support\Facades\DB::getQueryLog()) }}</p>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Municipality</th>
                <th>Population</th>
                <th>Barangay Captain</th>
                <th>Is Coastal</th>
                <th>Landmark</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($barangays as $barangay)
                <tr @if ($barangay['population'] > 1000) class="table-warning" @endif>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $barangay['name'] }}</td>
                    <td>{{ $barangay->municipality->name ?? 'N/A' }}</td>
                    <td>
                        {{ $barangay['population'] }}
                        @if ($barangay['population'] > 1000)
                            <span class="badge bg-warning text-dark">High Population</span>
                        @endif
                    </td>
                    <td>{{ $barangay['barangay_captain'] }}</td>
                    <td>{{ $barangay['is_coastal'] ? 'Yes' : 'No' }}</td>
                    <td>{{ $barangay['landmark'] ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ route('barangay.show', $barangay['id']) }}"
                           class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No barangays found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection