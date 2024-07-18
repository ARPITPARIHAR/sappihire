<?php

use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\PageController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Backend\DashboardController;


Route::get('/clear', function () {
    Artisan::call('storage:link');
    dd('Done');
});



Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('vision', 'vision')->name('vision');
    Route::get('mission', 'mission')->name('mission');
    Route::get('contact-us', 'contact_us')->name('contact-us');
    Route::get('gallery', 'gallery')->name('gallery');
    Route::get('placementservice', 'placementservice')->name('placementservice');
    Route::get('boardofdirectory', 'boardofdirectory')->name('boardofdirectory');
    Route::get('teammember', 'teamofmember')->name('teamofmember');
    Route::get('traningprogramme', 'traningprogramme')->name('traningprogramme');
    Route::get('login-register', 'login_register')->name('login-register');

});

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('login', [LoginController::class, 'adminlogin'])->name('login'); // Display login form

Route::post('/logins', [LoginController::class, 'login'])->name('login.submit'); // Process login form submission

Route::post('/register', [LoginController::class, 'register'])->name('register');

Route::get('/training-events', [EventController::class, 'index'])->name('training.search');

Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');



