@extends('dashboard.root')

@section('title', 'Dashboard')

@section('content')
    <p>Dashboard</p>
    <a href="{{ route('logout')}}">Logout</a>
@endsection
