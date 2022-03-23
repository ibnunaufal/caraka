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
            List of gallery
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
            @foreach ($gallery as $gallery)
                <tr>
                    <td class="td-bordered">{{ ++$i }}</td>
                    <td class="td-bordered">{{ $gallery->name }}</td>
                    <td class="td-bordered">{{ $gallery->image }}</td>
                    <td class="td-bordered">{{ $gallery->pdf }}</td>
                    <td class="td-bordered" style="text-align: center;">
                        <form action="{{ route('gallery.destroy',$gallery->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('gallery.show',$gallery->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('gallery.edit',$gallery->id) }}">Edit</a>
                            <a class="btn btn-danger" onclick="return myFunction();" href="{{route('gallery.destroy', $gallery->id)}}">Delete</a>
                            <script>
                            function myFunction() {
                                if(!confirm("Are You Sure to delete this"))
                                event.preventDefault();
                            }
                            </script>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    
</main>
@stop