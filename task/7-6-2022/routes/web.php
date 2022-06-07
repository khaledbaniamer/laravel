<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\RegisterController;
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

Route::view('register' , 'register');
Route::view('home' , 'home');

Route::post('register' , [RegisterController::class , 'register'] );

Route::group(['middleware'=>['admin']] ,function(){
    Route::view('admin' , 'admin');
});

Route::view('upload' , 'upload');
Route::post('upload' , [FileController::class , 'upload_file']);