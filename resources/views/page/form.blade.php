@extends('page.app')

@section('login', 'Page Title')

@section('content')

<div class="mx-auto h-screen">

    @if($errors->any())
        <div id="form-errors">
        @foreach($errors->all() as $error)
            <p class='form-error'>{{$error}}</p>
        @endforeach
        </div>
    @endif

    <form method="POST" action="{{route('authenticate')}}" class='bg-white p-5 m-5 rounded'>
        {{csrf_field()}}
        <input type="text" name="username" placeholder='username' class='border block p-5 m-auto w-full my-5'>
        <input type="password" name="password" placeholder='password' class='border block p-5 mx-auto w-full my-5'>
        <input type="submit" value='login' class='my-4 p-5 bg-gray-700 rounded w-full'>
    </form>
</div>
@endsection
