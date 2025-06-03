@props(['id'])
<div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">



    <form action="{{Route('createTeam')}}" method="post" class="space-y-6">
    @csrf
        <section class="space-y-2">
            <label for="user" class="block text-sm font-medium text-gray-700">User</label>
            <select id="user" name="user" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                 <option value="" disabled selected> select user</option>
                     @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </section>
        
        <section class="space-y-2">
            <label for="task" class="block text-sm font-medium text-gray-700">Task</label>
            <select id="task" name="task" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            <option value="" disabled selected> select task</option>
               @foreach ($tasks as $task)
                    <option value="{{ $task->id }}">{{ $task->title }}</option>
                @endforeach
            </select>
        </section>
        
        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Submit
        </button>
    </form>
</div>