@extends('layouts.app')

@section('title', 'Filter by Municipality')

@section('content')
    <h2>Filter by Municipality</h2>

    @if ($municipality)
        <p>Showing barangays in: <strong>{{ $municipality }}</strong></p>
    @else
        <p>Showing all municipalities.</p>
    @endif

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Municipality</th>
                <th>Population</th>
                <th>Barangay Captain</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($barangays as $barangay)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $barangay['name'] }}</td>
                    <td>{{ $barangay['municipality'] }}</td>
                    <td>{{ $barangay['population'] }}</td>
                    <td>{{ $barangay['barangay_captain'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">
                        No barangays found for "{{ $municipality }}".
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('barangay.index') }}" class="btn btn-secondary mt-2">Back to List</a>
@endsection