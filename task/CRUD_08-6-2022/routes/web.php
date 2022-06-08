<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

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

Route::get('/home', [MovieController::class ,'view_movies']);

Route::view('/add' ,'movies/create');
Route::post('add' ,[MovieController::class , 'add_movie']);

Route::get('/edit/{id}' , [MovieController::class, 'edit_movie']);
Route::post('/edit/{id}' , [MovieController::class, 'update_movie']);

Route::get('/delete/{id}' , [MovieController::class, 'delete_movie']);

Route::get('/view/{id}' , [MovieController::class, 'view_movie']);