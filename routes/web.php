<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Resource;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('resource', Resource::class);
