@php
use App\Models\project;

$user=project::where('owner_id',Auth::id())->get();
@endphp
@extends('layouts.app')

@section('title')
my project
@endsection
@section('content')
<h3 align="center"> projects</h3>
@foreach ($user as $users )
    
<div> 
 project name : {{$users->name}} <br>
 discription : {{$users->description}} <br>
<a href="{{route('create_task',$users->id)}}"> creat task </a>

</div>
@endforeach
@endsection