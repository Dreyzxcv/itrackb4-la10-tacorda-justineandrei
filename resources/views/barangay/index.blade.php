@extends('layouts.app')

@section('title', 'All Barangays List')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h2>List of Barangays</h2>
        <a href="{{ route('barangay.create') }}" class="btn btn-primary">+ Add New Barangay</a>
    </div>

    @if ($municipality === 'all' && $captain === 'all')     
        <p>Showing all barangays</p>
    @else
        <p>
            @if ($municipality !== 'all') Showing barangays in municipality: {{ $municipality }} @endif
            @if ($municipality !== 'all' && $captain !== 'all') | @endif
            @if ($captain !== 'all') Showing barangay captain: {{ $captain }} @endif
        </p>
    @endif

    <p>
        <a href="{{ route('barangay.index') }}">All</a> |
        <a href="{{ route('barangay.index', ['municipality' => 'Virac', 'captain' => $captain]) }}">Virac</a> |
        <a href="{{ route('barangay.index', ['municipality' => 'Bato', 'captain' => $captain]) }}">Bato</a>
    </p>

    <p>
        <a href="{{ route('barangay.index', ['municipality' => $municipality, 'captain' => 'Justine Andrei Tacorda']) }}">Justine Andrei Tacorda</a> |
        <a href="{{ route('barangay.index', ['municipality' => $municipality, 'captain' => 'Lenard Gil Llorca']) }}">Lenard Gil Llorca</a> |
        <a href="{{ route('barangay.index', ['municipality' => $municipality, 'captain' => 'John Hermie Tatel']) }}">John Hermie Tatel</a> |
        <a href="{{ route('barangay.index', ['municipality' => $municipality, 'captain' => 'Khaliq Aguilar']) }}">Khaliq Aguilar</a> |
        <a href="{{ route('barangay.index', ['municipality' => $municipality, 'captain' => 'Mikko Bobier']) }}">Mikko Bobier</a> |
        <a href="{{ route('barangay.index', ['municipality' => $municipality, 'captain' => 'Jun Amaro']) }}">Jun Amaro</a>
    </p>

    <p><a href="{{ route('barangay.index') }}" class="btn btn-secondary btn-sm">Clear All Filters</a></p>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Municipality</th>
                <th>Population</th>
                <th>Barangay Captain</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($barangays as $barangay)
                <tr @if ($barangay['population'] > 1000) class="table-warning" @endif>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $barangay['name'] }}</td>
                    <td>{{ $barangay['municipality'] }}</td>
                    <td>
                        {{ $barangay['population'] }}
                        @if ($barangay['population'] > 1000)
                            <span class="badge bg-warning text-dark">High Population</span>
                        @endif
                    </td>
                    <td>{{ $barangay['barangay_captain'] }}</td>
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