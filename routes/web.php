<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Models\Location;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/addresses', function () {
    return view('addresses', ['data' => Location::all(),]);
})->name('addresses');

Route::get('/address/{id}', function ($id) {
    return view('detailAdress', ['row' => Location::where('id', $id)->firstOrFail()]);
})->name('detail');


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/add', function () {
    return view('form');
})->name('form.add');


Route::get('/edit/{id}', function ($id) {
    return view('form', [
        'row' => Location::where('id', $id)->firstOrFail(),
    ]);
})->name('form.edit');

Route::get('/login', function () {
    return view('login');
})->name('login');




Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/add', [LocationController::class, 'store'])->name('location.store');
Route::patch('/edit/{id}', [LocationController::class, 'update'])->name('location.update');
Route::delete('/delete/{id}', [LocationController::class, 'destroy'])->name('location.destroy');
Route::get('addresses/search', [LocationController::class, 'search'])->name('search');



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });



require __DIR__ . '/auth.php';
