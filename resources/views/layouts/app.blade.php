<!DOCTYPE html>
<html lang="id">
<head>
    @include('layouts.partials.head')
</head>
<body>

    {{-- NAVBAR --}}
    @include('layouts.partials.navbar')

    {{-- MAIN CONTENT --}}
    <div class="container-fluid p-4">
        @yield('content')
    </div>

    {{-- FOOTER --}}
    @include('layouts.partials.footer')

    {{-- SCRIPTS --}}
    @include('layouts.partials.scripts')

</body>
</html>
