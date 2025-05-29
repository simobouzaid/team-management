@extends('layouts.app')
@section('title', 'register')
@section('content')
<h3>register</h3>
<div>
<form action="{{url('/create_user')}}" method="post">
    @csrf
    <input type="text" name="name" id="" placeholder="name" required>
    <input type="email" name="email" id="" placeholder="email" required>
    <input type="password" name="password" id="" placeholder="password" required>
    <input type="submit" value="login" name="login">

</form>
<a href="{{url('/login')}}">login</a>
</div>
@endsection