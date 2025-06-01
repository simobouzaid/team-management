<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Models\task;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// les routes pour le partie auth
Route::get('/login', [UserController::class, 'login'])->name('login');

route::get('/register', [UserController::class, 'register']);

/*les routes post  */
route::post('/create_user', [UserController::class, 'create_user']);
route::post('/login_user', [UserController::class, 'login_user']);

// proteger les routes 
Route::middleware('auth')->group(
    function () {
        Route::get('/home', function () {
            return view('home');
        });
        /*   les routes get       */
        Route::get('/', function () {
            return view('home');
        });

        // ler routes pour le partie projects
        route::get('/create_project', function () {
            return view('projects.create');
        });
        route::get('/index_project', [ProjectController::class, 'index']);
        route::get('/show_project/{id}', [taskController::class, 'tasks_project'])->name('show_project');
        // les routes pour le partie de task
        route::get('/create_task/{id}', function ($id) {
            return view('tasks.create', ['id' => $id]);
        })->name('create_task');

        route::post('/create_task', [TaskController::class, 'createTask']);
   
        route::put('/update_task', [TaskController::class, 'updateTask']);


      route::get('/create_team',[UserController::class,'create_team']);
        // route::get('/search/{id}',[UserController::class,'search_user'])->name('search');
           //  route::get('/edit_task/{id}', [TaskController::class, 'edit'])->name('update_task');

        route::get('/mytask', [TaskController::class, 'tasks_user']);

        route::get('/create_team/{id}', [TaskController::class, 'create_team']);

        Route::get('/logout', function () {
            Auth::logout();
            return view('auth.login');
        });


        // partie project 
        Route::post('/create_project', [ProjectController::class, 'create_project']);
    }
);
