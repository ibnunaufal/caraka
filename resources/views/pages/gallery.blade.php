@extends('layouts.app')
@section('content')
<!-- header -->
<header class = "header bg-light-brown flex" id = "home">
    <div class = "container">
        <div style="text-align: center; backgroud-image: url('https://drive.google.com/uc?export=view&id=0B6wwyazyzml-OGQ3VUo0Z2thdmc');">
        <!-- <img src="https://drive.google.com/uc?export=view&id=0B6wwyazyzml-OGQ3VUo0Z2thdmc" alt="" srcset=""> -->
            <h1>Gallery</h1>
            <h3>2022</h3>
        </div>
    </div>
</header>
<!-- end of header -->
<main>
<!-- https://drive.google.com/file/d/1HusY0yPhBM6aR6Clzidbgyqe3QY5WZs_/view?usp=sharing -->

    <!-- top new products section -->
    <section id = "new-products" class = "new-products py bg-light-grey-color-shade">
        <div class = "container">
            <div class = "section-title text-center">
                <h2>New Arrival Product</h2>
                <p class = "lead">Produk keluaran terbaru.</p>
                <div class = "line"></div>
            </div>

            <div class = "new-products-content grid">
                @foreach ($gallery as $gallery)
                <a href="{{ route('gallery.show',$gallery->id) }}">
                    <div class = "new-product-item">
                        <div class = "image">
                            <img src = "images/0560-01.png" alt = "">
                        </div>
                        <div class = "info">
                            <span>{{ $gallery->category }}</span>
                            <p class = "name">{{ $gallery->name }}</p>
                            <div class = "price">
                                <span class = "old text-grey">Meja, Kayu</span>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end of top new products section -->

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
</main>
@stop