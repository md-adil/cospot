@extends('layouts.app')

@section('content')
    <div class="container">
        @include('layouts.alert')
        <div class="card">
            <div class="card-header">
                All users
            </div>
            <div class="card-body">
                <a href="{{route('radius.users.create')}}">Create new user</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>User Name</th>
                            <th>Password</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->UserName}}</td>
                                <td>{{$user->Value}}</td>
                                <td>
                                <a href="{{route('radius.users.edit',['user'=>$user])}}" class="btn btn-secondary btn-sm">Edit</a>
                                    <a href="{{route('radius.users.destroy',['user'=>$user])}}" onclick="return destroy(this)" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
                {{$users->render()}}
            </div>
        </div>
    </div>
@endsection
