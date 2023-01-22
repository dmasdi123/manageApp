<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RevisionController;

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
    return view('dashboard.login.index');
})->name('login');

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
// Route::post('/login', 'App\Http\Controllers\LoginController@authenticate');

Route::resource('/user', UserController::class)->except('show');

Route::get('/homepage', [HomeController::class, 'index']);
Route::resource('/project', ProjectController::class)->except('show');
Route::resource('/revision', RevisionController::class)->except('show');
Route::resource('/report', ReportController::class)->except('show');

Route::resource('/categories', CategoriesController::class)->except('show');
