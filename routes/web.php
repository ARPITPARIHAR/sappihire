<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Artisan;

Route::get('/clear', function () {
    Artisan::call('storage:link');
    dd('Done');
});



Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('contact-us', 'contact_us')->name('contact-us');
    Route::get('gallery', 'gallery')->name('gallery');
    Route::get('placementservice', 'placementservice')->name('placementservice');
    Route::get('boardofdirectory', 'boardofdirectory')->name('boardofdirectory');
    Route::get('teammember', 'teamofmember')->name('teamofmember');
    Route::get('traningprogramme', 'traningprogramme')->name('traningprogramme');

});






Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
