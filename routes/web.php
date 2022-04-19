<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MoviesController;



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
    return "Hello world";
});

Route::get('/greeting', function () {
   // return "Hello world";
    return redirect('user/profile')->with('status', 'Welcome to laravel');
});

Route::get('/user/profile', [UserController::class, 'index']);//->middleware('auth');

Route::get('/user/{id}', [UserController::class, 'show']);

Route::post('/user/profile', [UserController::class, 'post']);

//Route::get('/user/profile', [UserController::class, 'index'])->middleware(EnsureTokenIsValid::class);

Route::get('/noaccess', [UserController::class, 'noaccess']);

Route::post('/users', [UserController::class, 'store']);


//Route::resource('posts', PostsController::class);


Route::resources([
    'pages' => PagesController::class,
    'posts' => PostsController::class,
]);


//Route::get('/movies', [MoviesController::class, 'movies']);

Route::resource('movies', MoviesController::class);







