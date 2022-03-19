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
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('gallery.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="txtFirstName">Name:</label>
            <input type="text" class="form-control" id="txtName" placeholder="Enter First Name" name="txtName">
        </div>
        <div class="form-group">
            <label for="txtLastName">Price:</label>
            <input type="text" class="form-control" id="txtPrice" placeholder="Enter Price" name="txtPrice">
        </div>
        <div class="form-group">
            <label for="txtLastName">Category:</label>
            <input type="text" class="form-control" id="txtCategory" placeholder="Enter Last Name" name="txtCategory">
        </div>
        <div class="form-group">
            <label for="txtLastName">Image:</label>
            <input type="text" class="form-control" id="txtImage" placeholder="Enter Last Name" name="txtImage">
        </div>
        <!-- <div class="form-group">
            <label for="txtAddress">Address:</label>
            <textarea class="form-control" id="txtAddress" name="txtAddress" rows="10" placeholder="Enter Address"></textarea>
        </div> -->
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</main>
@stop