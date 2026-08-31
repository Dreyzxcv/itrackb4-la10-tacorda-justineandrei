<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay {{ $barangay['name'] }} Details</title>
</head>
<body>
    <a href="{{ route('barangay.index') }}">Back to Barangay List</a>

    <h1>Barangay {{ $barangay['name'] }} Details</h1>
    <p>Prepared by: Justine Andrei A. Tacorda</p>

    <table border="1" cellpadding="8">
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
            <td>{{ $barangay['municipality'] }}</td>
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
    
</body>
</html>