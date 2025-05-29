@extends('layouts.app')

@section('title','login')
@section('content')

<h3>login</h3>
@if(session('success'))
    <div class="">
        {{ session('success') }}
    </div>
@endif
@if(session('errore'))
    <div class="">
        {{ session('errore') }}
    </div>
@endif
<form action="{{url('/login_user')}}" method="post">
    @csrf
    <input type="email" name="email" id="" placeholder="email" required>
    <input type="password" name="password" id="" placeholder="password" required>
    <input type="submit" value="login" name="login">

</form>
<a href="{{url('/register')}}">register</a>
@endsection