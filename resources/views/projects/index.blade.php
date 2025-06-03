@extends('layouts.app')

@section('title')
  my project
@endsection
@section('content')
  <h3 align="center"> projects</h3>
  <div class="flex justify-center ">
    @foreach ($projects as $project)
    <div class="w-80 p-5 m-3 border-3 border-b-emerald-600 rounded-lg shadow-sm hover:shadow-md transition-shadow">
    <h3 class="font-semibold text-gray-800 mb-2">Project Name: {{$project->name}}</h3>
    <p class="text-sm text-gray-600 mb-4">Description: {{$project->description}}</p>
    <div class="flex justify-around">
      <div class="flex justify-end">
      <a href="{{route('create_task', $project->id)}}"
      class="w-20 border-2 border-emerald-600 rounded-2xl px-3 py-1 text-center text-sm font-medium text-emerald-600 hover:bg-emerald-600 hover:text-white transition-colors">
      Create Task
      </a>
      </div>
      <div class="flex justify-end">
      <a href="{{route('show_project', $project->id)}}"
      class="w-20 border-2 border-emerald-600 rounded-2xl px-3 py-1 text-center text-sm font-medium text-emerald-600 hover:bg-emerald-600 hover:text-white transition-colors">

      show project
      </a>
      </div>
      <div class="flex justify-end">
      <a href="{{url('/create_team', $project->id)}}"
      class="w-20 border-2 border-emerald-600 rounded-2xl px-3 py-1 text-center text-sm font-medium text-emerald-600 hover:bg-emerald-600 hover:text-white transition-colors">
      create team
      </a>
      </div>
    </div>
    </div>
    @endforeach
  </div>
@endsection