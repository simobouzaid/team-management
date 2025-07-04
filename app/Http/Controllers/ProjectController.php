<?php

namespace App\Http\Controllers;

use App\Models\task_user;
use Illuminate\Http\Request;
use App\Models\project;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{


  public function index()
  {
    $projects = project::where('owner_id', Auth::id())->get();
    return view('projects.index', compact('projects'));
  }
  public function createTeam(Request $re)
  {
           if(!empty($re->user) && !empty($re->task)){
           task_user::create([
            'user_id'=>$re->user,
            'task_id'=>$re->task
           ]);

           return redirect()->back();
           
  }
  }

  public function create_project(Request $request)
  {
    $result = project::create([
      'owner_id' => Auth::id(),
      'name' => $request->name,
      'description' => $request->description
    ]);
    return $result ? redirect('/index_project') : redirect('/create_project')->with('errore', 'erore');
  }
}
