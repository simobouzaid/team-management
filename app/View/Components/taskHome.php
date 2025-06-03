<?php

namespace App\View\Components;

use App\Models\task_user;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
class taskHome extends Component
{
    /**
     * Create a new component instance.
     */

     public $tasks;
    public function __construct()
    {  
      
       $this->tasks = task_user::with('data_task')->get()->where('user_id',Auth::id()); 
    }
     
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        
        return view('components.task-home');
    }
}
