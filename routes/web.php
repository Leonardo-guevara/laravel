<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;


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

Route::get('/questions', function () {
    return view('questions');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});

// controladores
Route::get('/admin', [AdminController::class, 'index']);


// Route::get('/post', [PostController::class,'index']);
// Route::get('/post/create', [PostController::class,'create']);
// Route::post('/post', [PostController::class,'store']);
// Route::get('/post/{post}/edit', [PostController::class,'edit']);
// Route::get('/post/{post}', [PostController::class,'Show']);
// Route::path('/post/{post}', [PostController::class,'update']);
// Route::delete('/post/{post}', [PostController::class,'destroy']);

// Route::resources('post', [PostController::class]);
Route::resources([
    // 'photos' => PhotoController::class,
    'post' => PostController::class,
]);


// dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

