@extends('layouts.app')
@section('content')
<!-- header -->
<header class = "header bg-light-brown flex" id = "home">
    <div class = "container">
        <div style="text-align: center; backgroud-image: url('https://drive.google.com/uc?export=view&id=0B6wwyazyzml-OGQ3VUo0Z2thdmc');">
        <!-- <img src="https://drive.google.com/uc?export=view&id=0B6wwyazyzml-OGQ3VUo0Z2thdmc" alt="" srcset=""> -->
            <h1>{{ $category->name }}</h1>
            <h3>2022</h3>
        </div>
        <!-- <div class = "header-content grid text-center">
            <div class = "header-left">
                <h1>{{ $category->name }}</h1>
                <p class = "text">Caraka Creasindo Furniture is an Indonesian furniture company based in Jepara, Central Java, Indonesia. We are specialized in manufacture and export wooden furniture for more than 10 years. </p>
                <a href = "#" class = "btn-header text-white bg-brown">Read More</a>
            </div>

            <div class = "header-right">
                <img src = "images/header1.png">
            </div>
            <img src = "images/header-shape.png" class = "header-shape">
        </div> -->
    </div>
</header>
<!-- end of header -->
<main>
<!-- https://drive.google.com/file/d/1HusY0yPhBM6aR6Clzidbgyqe3QY5WZs_/view?usp=sharing -->
    <!-- <div style="text-align: center; margin: 40px 0px 20px 0px";> -->
    <div class="iframe-container">

        <!-- <iframe src="https://drive.google.com/file/d/1HusY0yPhBM6aR6Clzidbgyqe3QY5WZs_/preview" width="640" height="480" allow="autoplay"></iframe> -->
        <?php if ($category->name == "Indoor"): ?>
            <iframe src="https://drive.google.com/file/d/1HusY0yPhBM6aR6Clzidbgyqe3QY5WZs_/preview" allow="autoplay" class="iframe-responsive"></iframe>
        <?php elseif($category->name == "Outdoor"): ?>
            <iframe src="https://drive.google.com/file/d/1HusY0yPhBM6aR6Clzidbgyqe3QY5WZs_/preview" allow="autoplay" class="iframe-responsive"></iframe>
        <?php elseif($category->name == "Luxury Bedroom"): ?>
            <iframe src="https://drive.google.com/file/d/1A-7vunDo9v6QCh5RkxyWFMSCW3Jds4dt/preview" allow="autoplay" class="iframe-responsive"></iframe>
        <?php elseif($category->name == "Kitchen Ware"): ?>
            <iframe src="https://drive.google.com/file/d/19kT1qe4amR-OM4DI65nWgRHNtI5A-6S3/preview" allow="autoplay" class="iframe-responsive"></iframe>
        <?php elseif($category->name == "Resin"): ?>
            <iframe src="https://drive.google.com/file/d/1sHs4WXIkBtQvfva3sw106-JppH_DhVnJ/preview" allow="autoplay" class="iframe-responsive"></iframe>
        <?php else: ?>
            <iframe src="https://drive.google.com/file/d/1sHs4WXIkBtQvfva3sw106-JppH_DhVnJ/preview" allow="autoplay" class="iframe-responsive"></iframe>
        <?php endif; ?>
    </div>
    <div class="row">
        <div class="col-lg-11">
        
        </div>
        <!-- <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('category') }}"> Back</a>
        </div> -->
    </div>
</main>
@stop