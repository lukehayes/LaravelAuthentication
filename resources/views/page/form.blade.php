@extends('page.app')

@section('login', 'Page Title')

@section('content')
    <form method="POST" action="{{route('authenticate')}}">
        {{csrf_field()}}
        <input type="text" name="username" placeholder='username'>
        <input type="password" name="password" placeholder='password'>
        <input type="submit" value='login'>
    </form>
@endsection
