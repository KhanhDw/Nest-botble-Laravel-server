@extends('layouts.app')

@section('content')
    <h1>User</h1>
    <p>Welcome, {{ $userName }}!</p>
    <p>---------------------------</p>

    @include('components.card')

@endsection
