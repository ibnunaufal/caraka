@extends('layouts.app')
@section('content')
<main>
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
        ">
            List of Category
        </div>
        <div style="
            width: 100%;
            margin-bottom: 5px;
            text-align: right;
        ">
            <a class="btn btn-primary" href=" {{ url('category/create') }}">Add New</a>
        </div>
        
        <table class="table-bordered" style="width: 100%;">
            <tr>
                <th class="td-bordered">No</th>
                <th class="td-bordered">Name</th>
                <th class="td-bordered">Image</th>
                <th class="td-bordered">URL PDF</th>
                <th class="td-bordered" width="280px">Action</th>
            </tr>
            @php
                $i = 0;
            @endphp
            @foreach ($category as $category)
                <tr>
                    <td class="td-bordered">{{ ++$i }}</td>
                    <td class="td-bordered">{{ $category->name }}</td>
                    <td class="td-bordered"><h6> {{ strpos( $category->image, "/" ) </h6></td>
                    <td class="td-bordered">{{ $category->pdf }}</td>
                    <td class="td-bordered" style="text-align: center;">
                        <form action="{{ route('category.destroy',$category->id) }}" method="POST" onsubmit="return myFunction()">
                            <a class="btn btn-info" href="{{ route('category.show',$category->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('category.edit',$category->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <br>
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
        ">
            List of Galeery
        </div>
        <div style="
            width: 100%;
            margin-bottom: 5px;
            text-align: right;
        ">
            <a class="btn btn-primary" href=" {{ url('gallery/create') }}">Add New</a>
        </div>
        <table class="table-bordered" style="width: 100%;">
            <tr>
                <th class="td-bordered">No</th>
                <th class="td-bordered">Name</th>
                <th class="td-bordered">Price</th>
                <th class="td-bordered">Category</th>
                <th class="td-bordered">Image</th>
                <th class="td-bordered" width="280px">Action</th>
            </tr>
            @php
                $i = 0;
            @endphp
            @foreach ($gallery as $gallery)
                <tr>
                    <td class="td-bordered">{{ ++$i }}</td>
                    <td class="td-bordered">{{ $gallery->name }}</td>
                    <td class="td-bordered">{{ $gallery->price }}</td>
                    <td class="td-bordered">{{ $gallery->category }}</td>
                    <td class="td-bordered">{{ $gallery->image }}</td>
                    <td class="td-bordered" style="text-align: center;">
                        <form action="{{ route('gallery.destroy',$gallery->id) }}" method="POST" onsubmit="return myFunction()">
                            <a class="btn btn-info" href="{{ route('gallery.show',$gallery->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('gallery.edit',$gallery->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    
</main>
<script>
    function myFunction() {
        if(!confirm("Are you sure want to delete it?"))
        event.preventDefault();
    }
</script>
@stop