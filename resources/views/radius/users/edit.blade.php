@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><a href="{{route('radius.users.index')}}">Users</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>
</div>
<div class="container">
    <div class="card">
        <div class="card-body">
            @include('layouts.alert')

            <h2>Add new user</h2>
            <form action="{{route('radius.users.update',['user'=>$user])}}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" value="{{$user->UserName}}" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="password" placeholder="Password" value="{{$user->Value}}" />
                </div>
                <div class="form-group text-right">
                    <button class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>


</div>
@endsection
