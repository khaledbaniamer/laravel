<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/register' , 'registration');
Route::post('register' , [UserController::class , 'add_user']);
Route::get('show' , [UserController::class , 'show_data']);
Route::get('user/{id}', [UserController::class , 'show_single_product']);

Route::post('user/{id}' , [UserController::class , 'edit_user']);

Route::get('delete/{id}' , [UserController::class , 'delete_user']);



