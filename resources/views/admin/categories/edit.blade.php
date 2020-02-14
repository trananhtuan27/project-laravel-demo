@extends('master')
@section('title',' Edit')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('categories.edit', $category->id) }}" class="form-group">
                    @csrf
                    <div class="mt-3">
                        <label for="">Username: </label>
                        <input type="text" name="name" value="{{$category->name}}"
                               class="form-control @if($errors->has('name')) border-danger  @endif">
                        @if($errors->has('name'))
                            <p class="text-danger">{{$errors->first('name')}}</p>
                        @endif
                    </div>
                    <div class="mt-3">
                        <label for="">Slug </label>
                        <input type="text" name="slug" value="{{$category->slug}}"
                               class="form-control ">
                    </div>
                    <div class="mt-3">
                        <label for="">Description: </label>
                        <input type="text" name="description" value="{{$category->description}}"
                               class="form-control ">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-success">edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection



