<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>

    <div class = "holder">
        <!-- navbar -->
        @include('includes.header')
        <!-- end of navbar -->

        <!-- header -->
        <header class = "header bg-light-brown flex" id = "home">
            <div class = "container">
                <div class = "header-content grid text-center">
                    <div class = "header-left">
                        <h1>Caraka Furniture</h1>
                        <p class = "text">Caraka Creasindo Furniture is an Indonesian furniture company based in Jepara, Central Java, Indonesia. We are specialized in manufacture and export wooden furniture for more than 10 years. </p>
                        <a href = "#" class = "btn-header text-white bg-brown">Read More</a>
                    </div>

                    <div class = "header-right">
                        <img src = "images/header1.png">
                    </div>
                    <img src = "images/header-shape.png" class = "header-shape">
                </div>
            </div>
        </header>
        <!-- end of header -->

        <!-- main content -->
        @yield('content')
        <!-- end of main content -->

        <!-- footer -->
        @include('includes.footer')
        <!-- end of footer -->
    </div>
    <!-- custom js -->
    <script src = "js/script.js"></script>
</body>
</html>