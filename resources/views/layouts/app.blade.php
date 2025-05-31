<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TM | @yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>

<div >
@if (Auth::check())


<nav class="bg-gradient-to-r from-blue-600 to-blue-800 shadow-lg">
  <ul class="flex justify-around items-center py-4 px-6">

    <li>
      <a href="{{ url('/home') }}" class="text-white hover:text-blue-200 font-medium transition-colors duration-300 px-3 py-2 rounded hover:bg-blue-700">
        Home
      </a>
    </li>
    
    <li>
      <a href="{{ url('/mytask') }}" class="text-white hover:text-blue-200 font-medium transition-colors duration-300 px-3 py-2 rounded hover:bg-blue-700">
   my task
      </a>
    </li>
    
 
    <li>
      <a href="{{ url('/index_project') }}" class="text-white hover:text-blue-200 font-medium transition-colors duration-300 px-3 py-2 rounded hover:bg-blue-700">
        Projects
      </a>
    </li>

    <li>
      <a href="{{ url('/create_project') }}" class="text-white hover:text-blue-200 font-medium transition-colors duration-300 px-3 py-2 rounded hover:bg-blue-700">
        Create Project
      </a>
    </li>
    

    
    <li>
      <a href="{{ url('/logout') }}" class="text-white hover:text-red-200 font-medium transition-colors duration-300 px-3 py-2 rounded hover:bg-red-600">
        Log Out
      </a>
    </li>
  </ul>
</nav>
@endif
</div>
{{-- <a href="{{url('/create_task')}}">creat task</a> --}}
{{-- <ul><a href="{{url('/edit_task')}}">edit task</a></ul> --}}
     <main class="container">
        @yield('content') 
    </main>
    {{-- @include('footer') --}}
</body>
</html>