@extends('layouts.app')

@section('title', 'home')


@section('content')

   <h3 class="text-3xl font-bold underline"> hello {{Auth::user()->name}} </h3>

@endsection