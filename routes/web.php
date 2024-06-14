<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BunnyControler;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {  return view('welcome');});
Route::get('/about', function () {  return view('about');})->name('about');
Route::get('/contact', function () {  return view('contact');})->name('contact');

Route::get('/bunnies', [BunnyControler::class, 'index'])->name('bunnies');


//store new bunny
Route::post('/bunnies', [BunnyControler::class, 'store'])->middleware('auth');

//delete bunny
Route::delete('/bunnies/{bunny}', [BunnyControler::class, 'destroy'])->middleware('auth');

//show create new bunny form
Route::get('/bunnies/create/', [BunnyControler::class, 'create'])->middleware('auth');

// show edit form
Route::get('/bunnies/{bunny}/edit', [BunnyControler::class, 'edit'])->middleware('auth');

//edit submit to update
Route::put('/bunnies/{bunny}/edit', [BunnyControler::class, 'update'])->middleware('auth');

//show manage bunnies
Route::get('/bunnies/manage', [BunnyControler::class, 'manage'])->middleware('auth');


//single bunny
Route::get('/bunnies/{bunny}', [BunnyControler::class, 'show']);

//show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Create new user
Route::post('/users', [UserController::class, 'store']);

//log user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//log user in
Route::post('/users/login', [UserController::class, 'authenticate']);