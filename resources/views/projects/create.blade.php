@extends('layouts.app')
@section('title')
    create new project
@endsection
@section('content')
    <div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Create New Project</h2>

        <form action="{{ url('/create_project') }}" method="post" class="space-y-4">
            @csrf

   
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Project Name</label>
                <input type="text" name="name" id="name" placeholder="Enter project name" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
            </div>


            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea name="description" id="description" placeholder="Enter project description" rows="4"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"></textarea>
            </div>


            <div class="pt-2">
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Create Project
                </button>
            </div>
        </form>
    </div>

@endsection