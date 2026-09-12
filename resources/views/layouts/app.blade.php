<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Barangay Management System')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-1">Barangay Management System - Catanduanes</h1>
        <p class="text-muted mb-3">Prepared by: Justine Andrei A. Tacorda</p>

        @include('partials._nav')

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>