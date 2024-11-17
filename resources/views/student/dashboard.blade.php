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
