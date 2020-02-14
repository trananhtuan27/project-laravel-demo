@extends('master')
@section('title',' Edit')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{route('user.edit',$user->id)}}" method="POST" class="form-group">
                    @csrf
                    <div class="mt-3">
                        <label for="">Username: </label>
                        <input type="text" name="name" id="name" value="{{$user->name}}"
                               class="form-control @if($errors->has('name')) border-danger  @endif"
                               value="{{old('name')}}">
                        @if($errors->has('name'))
                            <p class="text-danger">{{$errors->first('name')}}</p>
                        @endif
                    </div>
                    <div class="mt-3">
                        <label for="">Email: </label>
                        <input type="email" name="email" id="email" value="{{$user->email}}"
                               class="form-control @if($errors->has('email')) border-danger  @endif"
                               value="{{old('email')}}">
                        @if($errors->has('email'))
                            <p class="text-danger">{{$errors->first('email')}}</p>
                        @endif
                    </div>
                    <div class="mt-3">
                        <label for="">Password: </label>
                        <input type="password" name="password" id="password" value="{{$user->password}}"
                               class="form-control @if($errors->has('password')) border-danger  @endif"
                               value="{{old('password')}}">
                        @if($errors->has('password'))
                            <p class="text-danger">{{$errors->first('password')}}</p>
                        @endif
                    </div>
                    <div class="mt-3">
                        <input type="submit" value="Edit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

