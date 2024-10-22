<?php

use App\Http\Controllers\Activities;
use App\Http\Controllers\Bookings;
use App\Http\Controllers\Messages;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Rooms;
use Illuminate\Support\Facades\Route;

//Home
Route::get('/', function () {
    return view('index');
})->name('home');
//About Us
Route::get('/about', function () {
    return view('app.about');
})->name('about');
//Contact
Route::get('/contact', function () {
    return view('app.contact');
})->name('contact');


//Rutas Activities
Route::get('activities', [Activities::class,'index'])->name('activities.index');
Route::resource('activities',Activities::class)->except(['index'])->middleware('auth');
//Rutas Rooms
Route::get('rooms', [Rooms::class, 'index'])->name('rooms.index');
Route::get('rooms/offers', [Rooms::class, 'indexoffers'])->name('rooms.offers');
Route::resource('rooms',Rooms::class)->except(['index'])->middleware('auth');
//Rutas Bookings
Route::get('bookings', [Bookings::class, 'index'])->name('bookings.index');
Route::resource('bookings',Bookings::class)->except(['index'])->middleware('auth');
//Rutas Messages
Route::get('messages', [Messages::class, 'index'])->name('messages.index');
Route::resource('messages',Messages::class)->except(['index'])->middleware('auth');


//Rutas login
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
