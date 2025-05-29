<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function create_user(Request $request){
    User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password
    ]);
    return redirect('/login')->with('success','successfully');;
    }
    public function login_user(Request $request){
      $result =Auth::attempt([
        'email'=>$request->email,
        'password'=>$request->password
      ]);
      $user=Auth::user();
      return $result ? view('home',compact('user')) : redirect('/login')->with('errore','errore in email or password');
    }
}
