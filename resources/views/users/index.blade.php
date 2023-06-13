@extends('users.app')

@section('title', 'Page Title')

@section('content')
    <a href="{{ route('home')}}">Home</a>
    <a href="{{ route('login')}}">Login</a>
    <a href="{{ route('dashboard')}}">Dashboard</a>

    @foreach($users as $user)
        <p>{{$user->id}}</p>
    @endforeach($users as $user)

@endsection



