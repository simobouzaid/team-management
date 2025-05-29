<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function create_project(Request $request)
    {
      $result =project::create([
        'owner_id'=>Auth::id(),
        'name'=>$request->name,
        'description'=>$request->description
      ]) ;


      return $result ? redirect('/index_project'):redirect('/create_project')->with('errore','erore');
    }
}
