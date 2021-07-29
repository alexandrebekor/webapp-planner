<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WebController::class, 'home']);

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function(){
    Route::get('/', [AdminController::class, 'home']);

    Route::resource('clients', ClientController::class);
    Route::get('clients/{client}/task', [ClientController::class, 'createTask'])->name('clients.task');
    
    Route::resource('projects', ProjectController::class);
    Route::get('projects/{project}/task', [ProjectController::class, 'createTask'])->name('projects.task');
    
    Route::resource('tasks', TaskController::class);
});