{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome To SAMS</title>
</head>
<body>
    @if(Auth::guard('teacher')->check())
    <h2>{{ Auth::guard('teacher')->user()->name }}</h2>
@endif

<!-- Logout Form -->
<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>

<!-- JavaScript to submit the form -->
<script>
    document.getElementById('logout-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission
        this.submit(); // Submit the form
    });
</script>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en" data-topbar-color="dark">
<head>
    <!-- Meta tags, title, CSS links, etc. -->
</head>
<body>
    <div id="wrapper">
        <!-- Left sidebar -->
        @include('student/include/leftsidebar')

        <div class="content-page">
            <!-- Topbar -->
            @include('student/include/topbar')

            <div class="content">
                @yield('content')
            </div> <!-- content -->

            <!-- Footer -->
            @include('student/include/footer')
        </div> <!-- content-page -->
    </div> <!-- wrapper -->

    <!-- Right sidebar -->
    @include('admin/include/rightsidebar')

    <!-- Vendor js -->
    <script src="{{ asset('js/dashboard/vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('js/dashboard/app.min.js') }}"></script>

    <!-- Plugins js -->
    <script src="{{ asset('js/dashboard/flatpickr.min.js') }}"></script>
    <script src="{{ asset('js/dashboard/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/dashboard/selectize.min.js') }}"></script>

    <!-- Dashboard init js -->
    {{-- <script src="{{ asset('js/dashboard/dashboard-1.init.js') }}"></script> --}}
</body>
</html>
