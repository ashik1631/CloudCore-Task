<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;


//frontend routes
//basic route

Route::get('/', function () {
    return view('layouts.backend');
});

//Route::get('/user/dashboard',[dashboardController::class,'index'])->name('dashboard');

//group route
Route::prefix('user/')->middleware(['auth'])->name('user.')->group(function () {
    //one line rout
    //Route::resource('UserProfile', UserProfileController::class);
    //Task route
    Route::resource('task', TaskController::class);
});

Route::middleware('auth')->get('/logout', [UserProfileController::class, 'logout'])->name('logout');
Route::prefix('user/')->middleware(['auth'])->name('user.')->group(function(){
    Route::resource('UserProfile', UserProfileController::class);
});

Route::prefix('user/')->middleware(['guest'])->name('user.')->group(function(){
    Route::resource('UserProfile', UserProfileController::class);
});
