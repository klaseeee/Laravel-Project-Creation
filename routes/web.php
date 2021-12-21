<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UsersController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');


Route::get('/beranda', 'App\Http\Controllers\MenuController@home');
Route::get('/info_kegiatan', 'App\Http\Controllers\MenuController@info_kegiatan');

// data siswa routing
// Route::get('/siswa', 'App\Http\Controllers\MenuController@data_siswa');
Route::resource('siswa', SiswaController::class)-> middleware('can:isAdmin');
Route::resource('siswa', SiswaController::class)-> only('show')->middleware('can:isAdminSiswa');

// manajemen users routing
// Route::get('/manajamen_users', )
Route::resource('users', UsersController::class)-> middleware('can:isAdmin');
Route::resource('users', UsersController::class)-> only('show')->middleware('can:isAdminSiswa');


