<nav class = "navbar bg-brown flex">
    <div class = "container flex">
        <div class = "toggler-and-category bg-brown text-white flex">
            <button type = "button" class = "btn navbar-show-btn text-white">
                <!-- <i class = "fas fa-bars"></i> -->
                <img style="zoom: 0.1;" src="{{ asset('images/icon/menu-outline.svg') }}" alt="">
            </button>
            <div class = "category-list">
                <a href="{{ url('/') }}">
                    <span style="color: white;">Caraka</span>
                </a>
                
                <!-- <button type = "button" class = "btn category-toggler-btn text-white">
                    <i class = "fas fa-circle-arrow-down"></i>
                </button> -->
            </div>

            <!-- side navbar -->
            <ul id = "side-navbar" class = "bg-white text-uppercase">
                <button type = "button" class = "btn navbar-hide-btn text-dark">
                    <img style="zoom: 0.1;" src="{{ asset('images/icon/close-outline.svg') }}" alt="">
                </button>
                @foreach($categorynavbar as $c)
                    <li><a href = "{{ url('category/'.$c->id) }}">{{ $c->name }}</a></li>
                @endforeach
                <!-- <li><a href = "{{ url('category/1') }}">Indoor</a></li>
                <li><a href = "{{ url('category/2') }}">Outdoor</a></li>
                <li><a href = "{{ url('category/3') }}">Luxury Bedroom</a></li>
                <li><a href = "{{ url('category/5') }}">Resin</a></li>
                <li><a href = "{{ url('category/4') }}">Kitchen Ware</a></li>
                <li><a href = "{{ url('gallery') }}">Gallery</a></li> -->
                <!-- <li><a href = "#">Catalogues</a></li> -->
                <li><a href = "{{ url('locator') }}">Store Locator</a></li>
                <!-- <li><a href = "{{ url('admin') }}">Login</a></li> -->
                @if (Auth::check())
                    <li><a href = "{{ url('admin') }}">Admin Page</a></li>
                    <li><a href = "{{ url('actionlogout') }}">Logout</a></li>
                @endif
                @if (Auth::guest())
                    <li><a href = "{{ url('admin') }}">Login</a></li>
                @endif
                <!-- <li><a href = "#">Search</a></li> -->
            </ul>
            <!-- end of side navbar -->
        </div>

        <!-- main navigation list -->
        <div class = "navbar-collapse flex">
            <!-- nav list -->
            <ul class = "navbar-nav text-uppercase">
                <li class = "nav-item">
                    <!-- <a href = "#" class = "nav-link active-link"> -->
                    <a href = "/" class = "nav-link">
                        <span class = "nav-link-text">Home</span>
                    </a>
                </li>
                <li class = "nav-item">
                    <a class = "nav-link">
                        <span class = "nav-link-text category-toggler-btn">Category</span>
                        <button type = "button" class = "btn category-toggler-btn text-white">
                            <!-- <i class = "fas fa-circle-arrow-down"></i> -->
                            <ul id = "category-list-items" class = "bg-white">
                                @foreach($categorynavbar as $c)
                                <li><a href = "{{ url('category/'.$c->id) }}">{{ $c->name }}</a></li>
                                @endforeach
                                <!-- <li><a href = "{{ url('category/1') }}">{{$categorynavbar}}</a></li>
                                <li><a href = "{{ url('category/2') }}">Outdoor</a></li>
                                <li><a href = "{{ url('category/3') }}">Luxury Bedroom</a></li>
                                <li><a href = "{{ url('category/5') }}">Resin</a></li>
                                <li><a href = "{{ url('category/4') }}">Kitchen Ware</a></li>
                                <li><a href = "{{ url('gallery') }}">Gallery</a></li> -->
                                <!-- <li><a href = "#">Catalogues</a></li> -->
                                <!-- <li><a href = "{{ url('locator') }}">Store Locator</a></li> -->
                                <!-- <li><a href = "#">Login</a></li> -->
                                <!-- <li><a href = "#">Search</a></li> -->
                            </ul>
                        </button>
                    </a>
                </li>
                <li class = "nav-item">
                    <a href = "/#about" class = "nav-link">
                        <span class = "nav-link-text">About</span>
                    </a>
                </li>
                <li class = "nav-item">
                    <a href = "/#contact" class = "nav-link">
                        <span class = "nav-link-text">Contact</span>
                    </a>
                </li>
                <li class = "nav-item">
                    <a href = "{{ url('admin') }}" class = "nav-link">
                        <span class = "nav-link-text">Login</span>
                    </a>
                </li>
            </ul>
            <!-- end of nav list -->

            <!-- account icons -->
            <!-- <div class = "account-info">
                <a href = "#" class = "btn text-white">
                    <i class = "fas fa-person"></i>
                </a>
                <a href = "#" class = "btn text-white">
                    <i class = "fas fa-shopping-basket"></i>
                </a>
            </div> -->
            <!-- end of account icons -->
        </div>
        <!-- end of main navigation list -->
    </div>
    <script>
        function scrollb(){
            window.scrollTo(0,9999);
        }
        // $('.btnabout').click(function() {
            


        // var url = $(this).data('url'); // THE ID OR THE ELEMENT YOU ARE TRYING TO SCROLL TO

        // //make up for the navbar height     
        // var navbar_height = parseInt($('.navbar').css('height').replace('px', ''));

        // // the 25 is just a bit more margin
        // animate_scroll(url, navbar_height, 25);

        // });
    </script>
</nav>