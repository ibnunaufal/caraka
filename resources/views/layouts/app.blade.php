<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>

    <div class = "holder">
        <!-- navbar -->
        @include('includes.navbar')
        <!-- end of navbar -->


        <!-- main content -->
        @yield('content')
        <!-- end of main content -->

        <!-- footer -->
        @include('includes.footer')
        <!-- end of footer -->
    </div>
    <!-- custom js -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>