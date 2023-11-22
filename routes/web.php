<?php

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

// parameter

// required
Route::get('/test/{id}', function ($id) {
    return $id ;
});

// NOT required
Route::get('/test1/{id?}', function () {
    return 'Not required parameter' ;
});

// route name
Route::get('/test/', function () {
    return 'route name' ;
})->name('route-name');


