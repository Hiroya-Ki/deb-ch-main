<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThreadsController;

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

Route::get('/', [ThreadsController::class, 'index']);
Route::get('threads/create', [ThreadsController::class, 'create'])->name('threads.create');
Route::post('threads/check', [ThreadsController::class, 'check'])->name('threads.check');
Route::get('threads/thanks', [ThreadsController::class, 'thanks'])->name('threads.thanks');
Route::post('threads/create', [ThreadsController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
