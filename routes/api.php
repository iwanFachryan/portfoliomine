<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/users', [\App\Http\Controllers\MainUserController::class, 'AlreadyRegister'])->name('api.register');
Route::post('/users/login', [\App\Http\Controllers\MainUserController::class, 'AlreadyLogin'])->name('api.login');
Route::post('/forgotpass', [\App\Http\Controllers\MainUserController::class, 'forgotpass'])->name('api.forgotpass');
Route::patch('/newpass', [\App\Http\Controllers\MainUserController::class, 'newpass'])->name('api.newpass');
//Route::patch('/users/changepass', [\App\Http\Controllers\MainUserController::class,'changepass'])->name('api.changepass');
