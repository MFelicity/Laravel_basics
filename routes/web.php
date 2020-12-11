<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
/*
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
    

});
*/
Route::get('/',[PagesController::class,'index']);

Route::get('/home', function () {

    return '<h1>This is the home page</h1>';

});
Route::get('/about', [PagesController::class,'About']);

Route::get('/services',[PagesController::class,'Services']);

Route::resource('posts',PostsController::class);



Route::get('/user/{id}', function ($id) {

    return 'This is the user' . $id;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::resource('posts', 'PostsController');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
