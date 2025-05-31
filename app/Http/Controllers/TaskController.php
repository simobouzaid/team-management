<?php

namespace App\Http\Controllers;

use App\Models\task;
use App\Models\task_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TaskController extends Controller
{



public function updateTask(Request $request){
$task=task::findOrFail($request->id);
$task->update([
   'title'=>$request->title,
'description'=>$request->description,
'status'=>$request->status
,
'due_date'=>$request->due_date
]);
return redirect('/mytask');
}

public function edit($id){
  $task=task::get()->where('id',$id);
  return view('tasks.edit',compact('task','id'));
}


    public function tasks_project($id){
 $tasks = task::where('project_id', $id)->get();
 return view('projects.show',compact('tasks'));
    }

 public function createTask(Request $request){

$Result=task::create([
'project_id'=>$request->project_id,
'title'=>$request->title,
'description'=>$request->description,
'status'=>$request->status
,
'due_date'=>$request->due_date
]);

return $Result ? redirect('/index_project') :redirect('/create_task')
->with('erroor','eroore');
}
public function tasks_user(){
   $tasks = task_user::with('data_task')->where('user_id', Auth::id())->get();
return view('tasks.mytask',compact('tasks'));
}

}
