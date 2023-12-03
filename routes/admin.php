<?php

use Illuminate\Support\Facades\Route;


Route::get('/admin', function () {
    return 'Admin page';
});

// Combine many class into namespace
Route::namespace('App\Http\Controllers\User')->group(function(){

// set prefix for set of routes
    Route::prefix('users')->group(function(){
        Route::get('/show','UserController@showAdminName');
    });
});


