<?php

namespace App\View\Components\team;

use App\Models\task;
use Auth;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\User;

class addTeam extends Component
{
public $tasks;
public $users;
public $id;
    public function __construct($id)
    { $this->id=$id;
    $this->users=User::all();
    $this->tasks=$this->getTask($id);
        
  
    }

    public function getTask($id){
       
        return $this->tasks =task::doesntHave('Task_user')->where('project_id',$id)->get(); 
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    { 
        return view('components.team.addTeam');
    }
}
