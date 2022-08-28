<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view("/about","about");
// Route::get('/about',function(){
//     return view('about');
// });
// Route::get("/",[UserController::class,'displayUsers']);
// Route::view("users/{id}","users");
// Route::view("users/{id}","users");

// displaying
Route::get('/',[StudentController::class, 'index'])->name('index');

// creating
// Route::post('/',[StudentController::class, 'create'])->name('create');
Route::view('/create','/student/addform');
Route::post('/create',[StudentController::class, 'create'])->name('create');

// editing/updating
Route::get('/edit/{id}',[StudentController::class, 'edit'])->name('edit');
Route::put('/edit/{id}',[StudentController::class, 'update'])->name('update');

// deleting
Route::get('/delete/{id}',[StudentController::class, 'destroy'])->name('destroy');