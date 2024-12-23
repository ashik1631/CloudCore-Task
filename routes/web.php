<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\dashboardController;
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
Route::prefix('user/')->name('user.')->group(function () {
    //one line rout
    //Task route
    Route::resource('task', TaskController::class);
    Route::resource('UserProfile', UserProfileController::class);

});
