@extends('layouts.app')
@section('content')
<!-- header -->
<!-- <header class = "header bg-light-brown flex" id = "home">
    <div class = "container">
        <div style="text-align: center; backgroud-image: url('https://drive.google.com/uc?export=view&id=0B6wwyazyzml-OGQ3VUo0Z2thdmc');">
        <img src="https://drive.google.com/uc?export=view&id=0B6wwyazyzml-OGQ3VUo0Z2thdmc" alt="" srcset="">
            <h1>Gallery</h1>
            <h3>2022</h3>
        </div>
    </div>
</header> -->
<!-- end of header -->
<main>
<!-- https://drive.google.com/file/d/1HusY0yPhBM6aR6Clzidbgyqe3QY5WZs_/view?usp=sharing -->
<!-- <p> {{ $gallery->name}} </p>
<p> {{ $gallery->price}} </p>
<p> {{ $gallery->category}} </p> -->

    <!-- top new products section -->
    <section id = "new-products" class = "new-products py bg-light-grey-color-shade">
        <div class = "container">
            <div class = "section-title text-center">
                <h2>{{ $gallery->name}}</h2>
                <p class = "lead">{{ $gallery->price}}.</p>
                <div class = "line"></div>
                <div class = "line"></div>
                <div class="product">
                    <img src ="{{ URL::to('/') }}/img/logo/{{ $gallery->image }}" alt = "asd">
                    <div style="margin-top: 30px;">
                        <a href="https://wa.me/6281225951789?text=Saya%20ingin%20bertanya%20tentang%20produk%20yang%20dijual%20{{ $gallery->name }}">
                            <img style="margin-left: auto; margin-right: auto; width: 200px;" src="{{ asset('images/icon/btn-wa.svg') }}" alt=""> 
                        </a>
                    </div>
                </div>
                <!-- <div class="button-wa">
                        
                        <button>
                            Hubungi Via WhatsApp
                        </button>
                    </div> -->
            </div>
        </div>
    </section>
    <!-- end of top new products section -->

</main>
@stop