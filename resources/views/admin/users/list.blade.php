@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($users as $key => $user)
                        <tr>
                            <th>{{++$key}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                         <a href="{{route('user.show',$user->id)}}">Edit</a>
                            </td>
                            <td>
                                <a href="{{route('user.destroy',$user->id)}}">Delete</a>
                            </td>
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
    </div>


@endsection
