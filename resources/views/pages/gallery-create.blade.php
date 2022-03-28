@extends('layouts.app')
@section('content')
<main>
<!-- https://drive.google.com/file/d/1HusY0yPhBM6aR6Clzidbgyqe3QY5WZs_/view?usp=sharing -->
  
    <section id = "new-products" class = "new-products py bg-light-grey-color-shade">
        <div class = "container">
            <div class = "section-title" >
                
                <h2 class="text-center">Add Product Gallery</h2>
                <div class = "line"></div>
                <br>
                <div class="product">
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
                    <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="txtName">Name:</label>
                            <input type="text" class="form-control" id="txtName" placeholder="Enter Name" name="txtName">
                        </div>
                        <div class="form-group">
                            <label for="txtLastName">Price:</label>
                            <input type="text" class="form-control" id="txtPrice" placeholder="Enter Price" name="txtPrice">
                        </div>
                        <div class="form-group">
                            <label for="txtLastName">Category:</label>
                            <select class="form-control" name="product_id">
                                <option>Select Item</option>
                                @foreach ($items as $key => $value)
                                    <option value="{{ $key }}" > 
                                        {{ $value }} 
                                    </option>
                                @endforeach    
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="txtLastName">Image:</label>
                            <input type="file" name="image" class="form-control" placeholder="Post Title">
                        </div>
                        <!-- <div class="form-group">
                            <label for="txtAddress">Address:</label>
                            <textarea class="form-control" id="txtAddress" name="txtAddress" rows="10" placeholder="Enter Address"></textarea>
                        </div> -->
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@stop