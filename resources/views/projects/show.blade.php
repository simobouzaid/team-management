
@extends('layouts.app')
@section('title', 'Détails du projet')

@section('content')
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">Tâches associées</h3>
        </div>

        <div class="border-t border-gray-200">
            <ul role="list" class="divide-y divide-gray-200">
                @forelse ($tasks as $task)
                    <li class="px-6 py-4 flex items-center justify-between">
                        <div class="flex items-center">
                            <!-- Checkbox -->
                            <input type="checkbox" disabled {{ $task->completed ? 'checked' : '' }}
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">

                            <!-- Titre et description -->
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">{{ $task->title }}</p>
                                <p class="text-xs text-gray-500">{{ $task->description }}</p>
                            </div>
                        </div>

                        <!-- Statut et date limite -->
                        <div class="text-right">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                {{ $task->status === 'completed' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                {{ $task->status === 'completed' ? 'Terminé' : 'En cours' }}
                            </span>
                            <p class="mt-1 text-xs text-gray-500">
                                Échéance : {{ \Carbon\Carbon::parse($task->due_date)->format('d/m/Y') }}
                            </p>
                        </div>
                    </li>
                @empty
                    <li class="px-6 py-4 text-sm text-gray-500 italic">
                        Aucune tâche trouvée pour ce projet.
                    </li>
                @endforelse
            </ul>
        </div>
    </div>
@endsection