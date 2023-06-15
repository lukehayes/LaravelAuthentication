@extends('page.app')

@section('login', 'Page Title')

@section('content')

    @if($errors->any())
        <div id="form-errors">
        @foreach($errors->all() as $error)
            <p class='form-error'>{{$error}}</p>
        @endforeach
        </div>
    @endif

    <form method="POST" action="{{route('authenticate')}}">
        {{csrf_field()}}
        <input type="text" name="username" placeholder='username'>
        <input type="password" name="password" placeholder='password'>
        <input type="submit" value='login'>
    </form>
@endsection
