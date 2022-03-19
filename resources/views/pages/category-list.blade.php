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
                    <td class="td-bordered">{{ $category->image }}</td>
                    <td class="td-bordered">{{ $category->pdf }}</td>
                    <td class="td-bordered" style="text-align: center;">
                        <form action="{{ route('category.destroy',$category->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('category.show',$category->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('category.edit',$category->id) }}">Edit</a>
                            <a class="btn btn-danger" onclick="return myFunction();" href="{{route('category.destroy', $category->id)}}">Delete</a>
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