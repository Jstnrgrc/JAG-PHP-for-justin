<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Blade;
use App\Http\Controllers\StudentController;

Route::get('/', fn() =>redirect()->route('login'));

Route::get('/login', function () {return view('auth.login');})->name('login');
Route::get('/register', function () {return view('auth.register');})->name('register');

Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
Route::get('/about', function () {return view('about');})->name('about');
Route::get('/contact', function () {return view('contact');})->name('contact');

Route::get('/profile', function () {return view('profile');})->name('profile');

Route::get('/settings', function () {return view('settings');})->name('settings');
Route::get('/logout', function () {return redirect()->route('login');})->name('logout');

// Route::get('/private-method',[StudentController::class, 'privateMethod']);
// Route::get('/show-private-method',[StudentController::class, 'showPrivateMethod']);
// Route::get('/show-constructor', [StudentController::class, 'showConstructor']);
// Route::get('/invoke', \App\Http\Controllers\TestController::class);

// Route::get('/student', [StudentController::class, 'index']);
// Route::get('/student/add/{sid}/{name}', [StudentController::class, 'store']);
// Route::get('/student/update/{sid}', [StudentController::class, 'update']);
// Route::get('/student/delete/{sid}', [StudentController::class, 'delete']);

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/home', function () {
//     return 'home';
// });
// Route::get('/about', function () {
//     return 'about';
// });
// Route::get('/contact', function () {
//     return 'contact';
// });
// Route::get('/greeting', function () {
//     return view('welcome');
// });