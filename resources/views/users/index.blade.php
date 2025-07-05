@extends('layouts.app')

@section('content')
    <h1>User</h1>
    <p>Welcome, {{ $name }}!</p>
    <div>
        @foreach ($phone as $item)
            <h3>{{ $item }}</h3>
        @endforeach
    </div>
    <div>
        <div>
            <h3>{{ $phone['home'] }}</h3>
            <h3>{{ $phone['work'] }}</h3>
        </div>
    </div>


    <div>
        @foreach ($lsPhone as $item)
            <div>
                <h3>{{ $item['home'] }}</h3>
                <h1>-------------------</h1>
                <h3>{{ $item['work'] }}</h3>
                <h1>-------------------</h1>
            </div>
        @endforeach
    </div>
    <h1>-----</h1>

    <div>
@foreach ($users as $user)
    <h1>{{ $user->user_name }}</h1>
    <h1>{{ $user->user_email }}</h1>
    <h1>{{ $user->user_password }}</h1>
    <a href="/user/{{ $user->user_id }}/edit">Edit</a>
        <form action="/user/{{ $user->user_id }}" method="post">">
        @csrf
        @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    <h1>-----</h1>
@endforeach
    </div>
<h1>----------------</h1>
    <div>
        <h1>create new user </h1>
        <form action="/user" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image_url" class="form-control">
            <div class="form-group">
                <label for="user_name">name:</label>
                <input type="text" class="form-control" id="user_name" name="user_name">
            </div>
            <div class="form-group">
                <label for="user_email">Email:</label>
                <input type="text" class="form-control" id="user_email" name="user_email">
            </div>
            <div class="form-group">
                <label for="user_password">password:</label>
                <input type="password" class="form-control" id="user_password" name="user_password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        @if ($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <p style="color:red;">{{ $error }}</p>
                @endforeach
            </div>            
        @endif
    </div>
@endsection
