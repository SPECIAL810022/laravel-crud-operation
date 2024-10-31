<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

// Route for simple home page with grouped UserController routes
Route::controller(UserController::class)->group(function () {
    // Home route
    Route::get('/', 'show')->name('home');

    // Single user record
    Route::get('/newuser/{id}', 'single')->name('singleuser');

    // Update user
    Route::post('/update/{id}', 'update')->name('update');
    Route::get('/updatepage/{id}', 'updatepage')->name('update.page');

    // Delete user
    Route::get('/delete/{id}', 'delete')->name('delete');

    // Add new user via form
    Route::post('/add', 'addUser')->name('addUser');

    // Form view for adding a new user
    Route::view('/newuser', 'adduser');
});

// Resource controller for StudentController
Route::resource('users', StudentController::class);
