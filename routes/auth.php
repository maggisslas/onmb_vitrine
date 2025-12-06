<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Route;

// Route::get('/connexion', function(){ return redirect()->route('login'); });
Route::get('/connexion', function () { return view('auth.login'); })->name('login.index');

Route::controller(LoginController::class)->group(function(){
    Route::get('/definir/mot-de-passe/{email}', 'define_password')->name('define_password');
    Route::post('/connexion', 'login')->name('login');
    Route::post('/deconnexion',  'logout')->name('logout')->middleware('auth');
});

Route::controller(ResetPasswordController::class)->group(function(){
    Route::get('/forgot-password', 'index')->name('password.request');
    Route::post('/forgot-password' , 'send_mail')->name('password.email');
    Route::get("/reset-password/{email}/{token}" , 'show')->name('password.reset');
    Route::post('/reset-password' , 'update')->name('password.update');
});
