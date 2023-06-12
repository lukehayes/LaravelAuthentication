@extends('page.app')

@section('title', 'Page Title')

@section('content')
    <a href="{{ route('home')}}">Home</a>
    <a href="{{ route('login')}}">Login</a>
    <a href="{{ route('dashboard')}}">Dashboard</a>
@endsection
