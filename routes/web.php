<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', function() {
//     return view('home');
// })->name('home')->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::post('/addclient', [App\Http\Controllers\HomeController::class, 'addclient'])->name('addclient')->middleware('auth');
Route::post('/DeleteClient', [App\Http\Controllers\HomeController::class, 'DeleteClient'])->name('DeleteClient')->middleware('auth');
Route::get('/layouts/Branch-Add', [App\Http\Controllers\BranchesController::class, 'index'])->name('index')->middleware('auth');
// Route::post('/insertar-cliente', [HomeController::class, 'insertarCliente'])->name('insertar-cliente');


Route::get('admin/new',function(){
    return 'new page';
});
Route::get('layouts/Calendar',function(){
    return view('layouts/Calendar');
});
// Route::get('layouts/Branch-Add',function(){
//     return view('layouts/Branch-Add');
// });