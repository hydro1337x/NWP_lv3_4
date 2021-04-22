<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\UsersController;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function (Request $request) {
    $currentUserId = $request->user()->id;
    $ownedProjects = Project::where('owner_id', $currentUserId)->get();
    $user = User::find($currentUserId);
    $assignedProjects = $user->projects()->get();

    return view('dashboard', ['ownedProjects' => $ownedProjects, 'assignedProjects' => $assignedProjects, 'currentUserId' => $currentUserId]);
})->middleware(['auth'])->name('dashboard');

// Route for creating the project
Route::post('/create', [ProjectsController::class, 'create'])->middleware('auth');
// Route for returing the create project form
Route::get('/create', function () {
    return view('create_project');
});

Route::get('/assign/{id}', function (Request $request, $id) {
    $currentUserId = $request->user()->id;
    $users = User::where('id', '!=', $currentUserId)->get();
    return view('assign', ['users' => $users, 'projectId' => $id]);
})->middleware('auth');

Route::post('/assign', [ProjectsController::class, 'assign'])->middleware('auth');

require __DIR__.'/auth.php';
