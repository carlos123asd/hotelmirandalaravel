<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Activities;

Route::get('/', function () {
    return view('login');
});
//Listar todas las actividades
Route::resource('activities', Activities::class);
