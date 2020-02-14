@extends('master')
@section('title','Create New User')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{route('categories.store')}}" method="POST" class="form-group">
                    @csrf
                    <div class="mt-3">
                        <label for="">Username: </label>
                        <input type="text" name="name" id="name"
                               class="form-control"
                               placeholder="Input Username">

                    </div>
                    <div class="mt-3">
                        <label for="">Slug: </label>
                        <input type="text" name="slug"
                               class="form-control "
                               placeholder="Input Slug">
                    </div>
                    <div class="mt-3">
                        <label for="">Description: </label>
                        <input type="text" name="description"
                               class="form-control "
                               placeholder="Input Description">
                    </div>
                    <div class="mt-3">
                        <input type="submit" value="Create" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
