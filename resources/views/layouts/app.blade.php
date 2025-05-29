<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TM | @yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>

<div>
@if (Auth::check())


<ul><a href="{{url('/home')}}">home</a>
<a href="{{url('/create_project')}}">create project</a>
<a href="{{url('/index_project')}}"> projects</a>
<a href="{{url('/show_project')}}">show project</a>
<a href="{{url('/create_task')}}">creat task</a>
{{-- <ul><a href="{{url('/edit_task')}}">edit task</a></ul> --}}
<a href="{{url('/logout')}}">log out</a></ul>
@else



@endif





</div>
     <main class="container">
        @yield('content') 
    </main>
    {{-- @include('footer') --}}
</body>
</html>