@extends('layouts.app')
@section('content')
<main>

 
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
    
    
        @method('PATCH')
        @csrf
        <div style="
        margin-left: 10%;
        margin-right: 10%;
        margin-top: 20px;
        margin-bottom: 20px;
        ">
            <div style="
                width: 100%;
                text-align: center;
                font-weight: 600;
                margin-bottom: 10px;
            ">
                Update Category
                <!-- <a href="{{ url('category') }}">
                            <button class="btn btn-danger" >
                                Cancel
                            </button>
                        </a> -->
            </div>
            <form method="post" action="{{ route('category.update',$category->id) }}" >
            <table class="" style="width: 100%;">
                <!-- <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>URL PDF</th>
                    <th width="280px">Action</th>
                </tr> -->
                <tr>
                    <td>Nama</td>
                    <td><input type="text" class="form-control" id="txtName" placeholder="Enter First Name" name="txtName" value="{{ $category->name }}"></td>
                    
                    
                    <!-- <td></td>
                    <td></td> -->
                </tr>
                <tr>
                    <td>Image</td>
                    <td><input type="text" class="form-control" id="txtImage" placeholder="Enter Last Name" name="txtImage" value="{{ $category->image }}"></td>
                    
                    <!-- <td></td>
                    <td></td> -->
                </tr>
                <tr>
                    <td>PDF</td>
                    <td><textarea class="form-control" id="txtPdf" name="txtPdf" rows="2" placeholder="Enter Address">{{ $category->pdf }}</textarea></td>
                </tr>
                <tr>
                    <!-- <td></td>
                    <td></td> -->
                    <td></td>
                    
                    <td>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</main>
@stop