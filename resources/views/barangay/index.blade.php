<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay List</title>
</head>
<body>
    <h1>Barangay List</h1>
    <p>Prepared by: Justine Andrei A. Tacorda</p>

    <table border="1" cellpadding="8">
        <tr>
            <th>Name</th>
            <th>Municipality</th>
            <th>Population</th>
        </tr>

        @foreach ($barangays as $barangay)
            <tr>
                <td>{{ $barangay['name'] }}</td>
                <td>{{ $barangay['municipality'] }}</td>
                <td>{{ $barangay['population'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>