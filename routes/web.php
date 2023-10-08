<?php

use App\Http\Controllers\view;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [view::class, 'showUser']);
