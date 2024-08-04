<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;

Route::middleware(['auth.user'])->group(function () {
    Route::resource('projects', ProjectController::class)->except(['index', 'show']);
});

Route::resource('projects', ProjectController::class)->only(['index', 'show']);


/*
|------------------------------------------mkdir resources/views/projects
--------------------------------
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
