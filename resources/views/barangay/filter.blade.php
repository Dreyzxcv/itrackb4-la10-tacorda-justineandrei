<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Municipality</title>
</head>
<body>
    <a href="{{ route('barangay.index') }}">Back to Barangay List</a>
    <h1>Filter Municipality</h1>
    <p>Prepared by: Justine Andrei A. Tacorda</p>

    @if ($municipality)
        <p>Showing Municipality in: <strong>{{ $municipality }}</strong></p>
    @else
        <p>Showing all Municipality.</p>
    @endif

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Municipality</th>
            <th>Population</th>
            <th>Barangay Captain</th>
        </tr>

        @forelse ($barangays as $barangay)
            <tr>
                <td>{{ $barangay['id'] }}</td>
                <td>{{ $barangay['name'] }}</td>
                <td>{{ $barangay['municipality'] }}</td>
                <td>{{ $barangay['population'] }}</td>
                <td>{{ $barangay['barangay_captain'] }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No Municipality found for "{{ $municipality }}".</td>
            </tr>
        @endforelse
    </table>
</body>
</html>