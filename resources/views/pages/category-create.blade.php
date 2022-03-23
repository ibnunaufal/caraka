@extends('layouts.app')
@section('content')
<main>
<!-- https://drive.google.com/file/d/1HusY0yPhBM6aR6Clzidbgyqe3QY5WZs_/view?usp=sharing -->
  
    <section id = "new-products" class = "new-products py bg-light-grey-color-shade">
        <div class = "container">
            <div class = "section-title" >
                
                <h2 class="text-center">Add Category</h2>
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
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="txtName">Name:</label>
                            <input type="text" class="form-control" id="txtName" placeholder="Enter Name" name="txtName">
                        </div>
                        <div class="form-group">
                            <label for="txtLastName">Image:</label>
                            <input type="text" class="form-control" id="txtImage" placeholder="Enter Price" name="txtImage">
                        </div>
                        <div class="form-group">
                            <label for="txtLastName">Pdf:</label>
                            <input type="text" class="form-control" id="txtPdf" placeholder="Enter Category" name="txtPdf">
                        </div>
                        <!-- <div class="form-group">
                            <label for="txtLastName">Image:</label>
                            <input type="text" class="form-control" id="txtImage" placeholder="Enter Image" name="txtImage">
                        </div> -->
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