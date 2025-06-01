<div align="center">

    <input 
        type="text" wire:model.live="search" placeholder="Search users..." class="border p-2 rounded">


    <div wire:loading class="text-sm text-gray-500">Searching...</div>


    @if($users->count())
        <ul class="mt-4 space-y-2 " >
            @foreach ($users as $user)
            <div class="flex">
                <li class="p-2 hover:bg-gray-50">{{ $user->name }}</li>
              <input wire:click='' type="submit" value="create task for user" class="border-2">
            </div>
            @endforeach
        </ul>
        

        <div class="mt-4">
            {{ $users->links() }}
        </div>
    @else
        <p class="mt-4 text-gray-500">No users found</p>
    @endif
</div>
</div>
