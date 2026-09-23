<nav class="nav mb-3">
    <a class="nav-link {{ request()->is('barangay') || request()->is('barangay/*') ? 'active fw-bold' : '' }}"
       href="{{ route('barangay.index') }}">All Barangays</a>
    <a class="nav-link {{ request()->is('barangay/featured') ? 'active fw-bold' : '' }}"
       href="{{ route('barangay.featured') }}">Featured Barangay</a>
</nav>