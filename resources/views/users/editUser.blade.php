@extends('layouts.app')

@section('content')
    <div>
        <form action="/user/{{ $user->user_id }}" method="POST">
        @csrf
        @method('PUT')
            <div class="form-group">
                <label for="user_name">name:</label>
                <input type="text" class="form-control" id="user_name" name="user_name" value="{{ $user->user_name }}">
            </div>
            <div class="form-group">
                <label for="user_email">Email:</label>
                <input type="text" class="form-control" id="user_email" name="user_email" value="{{ $user->user_email }}">
            </div>
            <div class="form-group">
                <label for="user_password">password:</label>
                <input type="password" class="form-control" id="user_password" name="user_password" value="{{ $user->user_password }}">
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