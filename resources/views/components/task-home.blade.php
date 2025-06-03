<div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-4">

    <div class="bg-white rounded-lg shadow-md overflow-hidden border-l-4 border-yellow-400">
        <div class="bg-yellow-50 px-4 py-3 border-b border-yellow-100">
            <h3 class="font-semibold text-yellow-800 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                        clip-rule="evenodd" />
                </svg>
                Pending Tasks
            </h3>
        </div>
        <div class="p-4 space-y-4">
            @foreach ($tasks as $task)
                @if ($task->data_task->status === 'pending')
                    <div class="bg-white p-4 rounded-md shadow-sm hover:shadow-md transition-shadow">
                        <h4 class="font-medium text-gray-900">{{ $task->data_task->title }}</h4>
                        <p class="text-sm text-gray-600 mt-1 line-clamp-2">{{ $task->data_task->description }}</p>

                        <div class="mt-3 flex items-center justify-between text-xs">
                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full">
                                {{ ucfirst($task->data_task->status) }}
                            </span>
                            <span class="text-gray-500">Due: {{ $task->data_task->due_date }}</span>
                        </div>

                        <div class="mt-3 flex space-x-2 justify-around">
                            <a href="{{url('/task_Inprogress',$task->data_task->id)}}" class="text-xs bg-blue-100 text-blue-800 px-3 py-1 rounded hover:bg-blue-200 transition">
                                Start Progress
                            </a>
                            <a  href="{{url('/task_Completed',$task->data_task->id)}}" class="text-xs bg-green-100 text-green-800 px-3 py-1 rounded hover:bg-green-200 transition">
                                Mark Complete
                            </a>
                        </div>
                    </div>
                @endif
            @endforeach

            @if(!$tasks->where('data_task.status', 'pending')->count())
                <div class="text-center py-6 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                    No pending tasks
                </div>
            @endif
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md overflow-hidden border-l-4 border-blue-400">
        <div class="bg-blue-50 px-4 py-3 border-b border-blue-100">
            <h3 class="font-semibold text-blue-800 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z"
                        clip-rule="evenodd" />
                </svg>
                In Progress
            </h3>
        </div>
        <div class="p-4 space-y-4">
            @foreach ($tasks as $task)
                @if ($task->data_task->status === 'in_progress')
                    <div class="bg-white p-4 rounded-md shadow-sm hover:shadow-md transition-shadow">
                        <h4 class="font-medium text-gray-900">{{ $task->data_task->title }}</h4>
                        <p class="text-sm text-gray-600 mt-1 line-clamp-2">{{ $task->data_task->description }}</p>

                        <div class="mt-3 flex items-center justify-between text-xs">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full">
                                In Progress
                            </span>
                            <span class="text-gray-500">Due: {{ $task->data_task->due_date }}</span>
                        </div>
                         <div class="flex justify-around">
                        <div class="mt-3">
                            <a href="{{url('/task_Completed',$task->data_task->id)}}"
                                class="w-full text-xs bg-green-100 text-green-800 px-3 py-1 rounded hover:bg-green-200 transition">
                                Mark Complete
                            </a>
                        </div>
                        <div class="mt-3">
                            <a href="{{url('/task_Pending',$task->data_task->id)}}"
                                class="w-full text-xs bg-yellow-100 text-yellow-800 px-3 py-1 rounded hover:bg-yellow-400 transition">
                            pending
                            </a>
                        </div>
                         </div>
                    </div>
                @endif
            @endforeach

            @if(!$tasks->where('data_task.status', 'in_progress')->count())
                <div class="text-center py-6 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    No tasks in progress
                </div>
            @endif
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md overflow-hidden border-l-4 border-green-400">
        <div class="bg-green-50 px-4 py-3 border-b border-green-100">
            <h3 class="font-semibold text-green-800 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd" />
                </svg>
                Completed
            </h3>
        </div>
        <div class="p-4 space-y-4">
            @foreach ($tasks as $task)
                @if ($task->data_task->status === 'completed')
                    <div class="bg-white p-4 rounded-md shadow-sm hover:shadow-md transition-shadow">
                        <h4 class="font-medium text-gray-900 line-through">{{ $task->data_task->title }}</h4>
                        <p class="text-sm text-gray-500 mt-1 line-clamp-2">{{ $task->data_task->description }}</p>

                        <div class="mt-3 flex items-center justify-between text-xs">
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full">
                                Completed
                            </span>
                            <span class="text-gray-500">Finished: {{ $task->updated_at }}</span>
                        </div>
                          <div class="flex justify-around">
                        <div class="mt-3">
                            <a href="{{url('/task_Inprogress',$task->data_task->id)}}" class="text-xs bg-blue-100 text-blue-800 px-3 py-1 rounded hover:bg-blue-200 transition">
                                Start Progress
                            </a>
                        </div>
                        <div class="mt-3">
                            <a href="{{url('/task_Pending',$task->data_task->id)}}"
                                class="w-full text-xs bg-yellow-100 text-yellow-800 px-3 py-1 rounded hover:bg-yellow-400 transition">
                            pending
                            </a>
                        </div>
                         </div>
                    </div>
                @endif
            @endforeach

            @if(!$tasks->where('data_task.status', 'completed')->count())
                <div class="text-center py-6 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    No completed tasks
                </div>
                
            @endif
        </div>
    </div>
</div>