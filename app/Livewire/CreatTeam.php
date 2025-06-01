<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
class CreatTeam extends Component
{
    use WithPagination; 
    
    public $search = ''; 

    public function render()
    {
        $users = User::query()
                    ->when($this->search, function($query) {
                        $query->where('name', 'ilike', "%{$this->search}%");
                    })
                    ->latest()
                    ->paginate(3); 

        return view('livewire.creat-team', [
            'users' => $users 
        ]);
    }
}