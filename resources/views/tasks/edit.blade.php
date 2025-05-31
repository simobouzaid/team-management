@extends('layouts.app')
@section('title')
edit task
@endsection
@section('content')
  <div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">edit Task</h2>

        <form action="{{ url('/update_task') }}" method="post" class="space-y-4">
            @csrf
            @method('put')
@foreach ( $task as $tasks )
    
            <div>
            <input type="hidden" name="id" value="{{$id}}">
            </div>
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Task Title</label>
                <input type="text" name="title" id="title" placeholder="Enter task title" value="{{$tasks->title}}" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea name="description" id="description" placeholder="Enter task description" rows="4" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">{{old('description',$tasks->description)}}</textarea>
            </div>

            <div>
                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                <select name="status" id="status" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                 
    <option value="pending" @selected(old('status', $tasks->status) == 'pending')>Pending</option>
    <option value="in_progress" @selected(old('status', $tasks->status) == 'in_progress')>In Progress</option>
    <option value="completed" @selected(old('status', $tasks->status) == 'completed')>Completed</option>

                </select>
            </div>

            <div>
                <label for="due_date" class="block text-sm font-medium text-gray-700 mb-1" >Due Date</label>
                <input type="date" name="due_date" id="due_date" value="{{$tasks->due_date}}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
            </div>

            <div class="pt-2">
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                edit Task
                </button>
            </div>
@endforeach
        </form>
    </div>
@endsection