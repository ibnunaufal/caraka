@extends('layouts.app')
@section('content')
<main>

    <section id = "new-products" class = "new-products py bg-light-grey-color-shade">
        <div class = "container">
            <div class = "section-title" >
                
                <h2 class="text-center">Update Category</h2>
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
                    <form method="POST" action="{{ route('category.update',$category->id) }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="txtName">Name:</label>
                            <input type="text" class="form-control" id="txtName" placeholder="Enter Name" name="txtName" value="{{ $category->name }}">
                        </div>
                        <div class="form-group">
                            <label for="txtImage">Image:</label>
                            <!-- <input type="text" class="form-control" id="txtImage" placeholder="Enter Image Url" name="txtImage" value="{{ $category->image }}"> -->
                            <img src ="{{ URL::to('/') }}/img/logo/{{ $category->image }}" style="max-height:50px; width:auto;" alt = "asd">
                            <input type="file" name="image" class="form-control" placeholder="Post Title">
                        </div>
                        <div class="form-group">
                            <label for="txtPdf">Pdf:</label>
                            <!-- <textarea class="form-control" id="txtPdf" name="txtPdf" rows="2" placeholder="Enter PDF Url">{{ $category->pdf }}</textarea> -->
                            <input type="file" name="pdf" class="form-control" placeholder="Post Title">
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