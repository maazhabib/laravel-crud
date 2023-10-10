<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(UserController::class)->group(function () {
    Route::get('/', 'showUser')->name('home');

    Route::post('/add', 'addUser')->name('addUser');

    Route::get('/user/{id}', 'viewUser')->name('view.page');

    Route::post('/update/{id}', 'updateUser')->name('update.user');
    Route::get('/updatepage/{id}', 'updatePage')->name('update.page');

    Route::get('/delete/{id}', 'deleteUser')->name('delete.user');
});

Route::view('newuser', 'addUser');
