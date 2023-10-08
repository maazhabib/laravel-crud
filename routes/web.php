<?php

use App\Http\Controllers\view;
use Illuminate\Routing\ViewController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(view::class)->group(function(){


    Route::get('/', 'showUser')->name('home');

    Route::post('/add', 'addUser')->name('addUser');

    Route::post('/update/{id}', 'updateUser')->name('update.user');
    Route::get('/updatepage/{id}', 'updatePage')->name('update.page');

    Route::get('/delete/{id}', 'deleteUser')->name('delete.user');

});




Route::view('newuser', 'addUser');
