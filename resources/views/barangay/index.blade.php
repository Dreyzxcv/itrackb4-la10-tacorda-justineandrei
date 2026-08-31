<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay List</title>
</head>
<body>
    <nav>
        <a href="{{ route('barangay.index') }}">All Barangays</a> |
        <a href="{{ route('barangay.featured') }}">Featured Barangay</a> |
        <a href="{{ route('barangay.filter') }}">Filter Barangays</a>
    </nav>
    <p>Prepared by: Justine Andrei A. Tacorda</p>

    <h1>List of Barangays</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Municipality</th>
            <th>Population</th>
            <th>Barangay Captain</th>
            <th>View Details</th>
        </tr>

        @foreach ($barangays as $barangay)
            <tr>
                <td>{{ $barangay['id'] }}</td>
                <td>{{ $barangay['name'] }}</td>
                <td>{{ $barangay['municipality'] }}</td>
                <td>{{ $barangay['population'] }}</td>
                <td>{{ $barangay['barangay_captain'] }}</td>
                <td><a href="{{ route('barangay.show', $barangay['id']) }}">View</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>