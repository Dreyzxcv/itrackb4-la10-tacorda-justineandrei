@extends('layouts.app')

@section('title', 'Barangay ' . $barangay['name'])

@section('content')
    <h2>Barangay {{ $barangay['name'] }} Details</h2>

    <div class="card" style="max-width: 500px;">
        <div class="card-body">
            <table class="table table-bordered mb-0">
                <tr>
                    <th>ID</th>
                    <td>{{ $barangay['id'] }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $barangay['name'] }}</td>
                </tr>
                <tr>
                    <th>Municipality</th>
                    <td>{{ $barangay->municipality->name }}</td>
                </tr>
                <tr>
                    <th>Population</th>
                    <td>{{ $barangay['population'] }}</td>
                </tr>
                <tr>
                    <th>Barangay Captain</th>
                    <td>{{ $barangay['barangay_captain'] }}</td>
                </tr>
            </table>
        </div>
    </div>

    <a href="{{ route('barangay.index') }}" class="btn btn-secondary mt-3">Back to List</a>
@endsection