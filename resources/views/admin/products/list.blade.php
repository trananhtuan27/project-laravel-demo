@extends('master')

@section('content')
    <div class="col-12">
        <div class="col-6 float-left">
            <a href="{{route('product.create')}}" class="btn btn-success">Create New Product</a>
        </div>
        <div class="col-6 float-left">
            <div class="pagination float-right mr-4">
                {{$products->links()}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <button class="btn btn-danger" id="hide-image">Hide Image</button>
            <input id="size-image" type="number" value="4">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th class="image-product">Image</th>
                    <th>Category</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @forelse($products as $key => $product)
                    <tr>
                        <th>{{++$key}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td class="image-product"><img src="{{asset('storage/'.$product->image)}}" width="100px" class="image-thumbnail-product"></td>
                        <td>{{$product->category->name}}</td>

                    </tr>
                @empty
                    <tr>
                        <th colspan="6">No data</th>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

    </div>
@endsection
