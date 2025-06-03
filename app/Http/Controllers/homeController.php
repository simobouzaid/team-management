<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class homeController extends Controller
{

    public function findTask($id_task, $status)
    {
        $task = task::find($id_task);
        $task->update(['status' => $status]);
        return view('home');
    }



    public function taskCompleted($id_task)
    {

        return $this->findTask($id_task, 'completed');
    }

    public function taskInprogress($id_task)
    {
       return  $this->findTask($id_task, 'in_progress');
    }
    public function taskPending($id_task)
    {
        return $this->findTask($id_task, 'pending');
    }
}
