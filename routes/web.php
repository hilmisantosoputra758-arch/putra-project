<?php


use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/profile', function () {
    return view('profil');
})->name('profile');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/siswa', [StudentController::class, 'index'])->name('siswa');

Route::get('/add-siswa', [StudentController::class, 'add'])->name('siswa.add');

Route::post('/add-siswa', [StudentController::class, 'store'])->name('siswa.store');
