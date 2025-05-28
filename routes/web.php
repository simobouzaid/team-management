<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*   les routes get       */
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
// les routes pour le partie auth
route::get('/login',function(){
    return view('auth.login');
});
route::get('/register',function(){
    return view('auth.register');

});
// ler routes pour le partie projects
route::get('/create_project',function(){
    return view('projects.create');
});
route::get('/index_project',function(){
    return view('projects.index');
});
route::get('/show_project',function(){
    return view('projects.show');
});
// les routes pour le partie de task
route::get('/create_task',function(){
    return view('tasks.create');
});
route::get('/edit_task',function(){
    return view('tasks.edit');
});
/*les routes post  */
route::post('/create_user',[UserController::class ,'create_user']);
route::post('/login_user',[UserController::class ,'login_user']);