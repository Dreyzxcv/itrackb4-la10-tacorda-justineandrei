@extends('layouts.app')

@section('title', 'All Barangays List')

@section('content')
     <h2>List of Barangays</h2>

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
                    <td colspan="6" class="text-center">
                        No barangays have been added yet.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection