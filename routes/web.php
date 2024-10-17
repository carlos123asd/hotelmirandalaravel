<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Activities;

Route::get('/', function () {
    return view('login');
});


Route::resource('activities', Activities::class);
