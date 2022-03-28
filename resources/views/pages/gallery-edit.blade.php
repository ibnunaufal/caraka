@extends('layouts.app')
@section('content')
<main>

    <section id = "new-products" class = "new-products py bg-light-grey-color-shade">
        <div class = "container">
            <div class = "section-title" >
                
                <h2 class="text-center">Update gallery</h2>
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
                    <form method="post" action="{{ route('gallery.update',$gallery->id) }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="txtName">Name:</label>
                            <input type="text" class="form-control" id="txtName" placeholder="Enter First Name" name="txtName" value="{{ $gallery->name }}">
                        </div>
                        <div class="form-group">
                            <label for="txtName">Price:</label>
                            <input type="text" class="form-control" id="txtPrice" placeholder="Enter Price" name="txtPrice" value="{{ $gallery->price }}">
                        </div>
                        <div class="form-group">
                            <label for="txtName">Category:</label>
                            
                            <select class="form-control" name="txtCategory" value="{{ $gallery->category }}">
                                <option>Select Item</option>
                                @foreach ($items as $key => $value)
                                    <option value="{{ $value }}" {{ ( $items[$key] == $selected) ? 'selected' : '' }}> 
                                        {{ $items[$key] }} 
                                    </option>
                                @endforeach    
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="txtLastName">Image:</label>
                            <img src ="{{ URL::to('/') }}/img/logo/{{ $gallery->image }}" style="max-height:50px; width:auto;" alt = "asd">
                            <input type="file" name="image" class="form-control" placeholder="Post Title" value=" {{ $gallery->image}} ">
                            <!-- <input type="text" class="form-control" id="txtImage" placeholder="Enter Last Name" name="txtImage" value="{{ $gallery->image }}"> -->
                        </div>
                        <!-- <div class="form-group">
                            <label for="txtLastName">Pdf:</label>
                            <textarea class="form-control" id="txtPdf" name="txtPdf" rows="2" placeholder="Enter Address">{{ $gallery->pdf }}</textarea>
                        </div> -->
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