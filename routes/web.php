<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;


//HomeView
Route::get('/',function(){
   return view('home');
})->name('home');

//DashboardView
Route::get('/dashboard',[DashboardController::class, 'index'])
->name('dashboard')
->middleware('auth');


//RegisterView
Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);



// LoginView
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'store']);

// LogoutView

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');



Route::get('/posts', function () {
    return view('posts.index');
})
->name('posts')
->middleware('auth');
