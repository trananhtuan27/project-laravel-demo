@extends('master')
@section('content')
    <div class="row">
        <div class="">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $key => $category)
                    <tr>
                        <th>{{$category->id}}</th>
                        <td>{{$category->name}}</td>
                        <td>{{$category->slug}}</td>
                        <td>{{$category->description}}</td>
                        <td><a href="{{route('categories.show',$category->id)}}">Edit</a></td>
                        <td>
                            <a href="{{route('categories.destroy',$category->id)}}">Delete</a>
                        </td>
                    <tr>
                        <th colspan="6">No data</th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>


@endsection
