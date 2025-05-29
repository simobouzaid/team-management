@extends('layouts.app')
@section('title')
    create new project
@endsection
@section('content')
    <form action="{{url('/create_project')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name project" required>
        <textarea name="description" id="" placeholder="description"> </textarea>
     
        <input type="submit" >
    </form>

@endsection