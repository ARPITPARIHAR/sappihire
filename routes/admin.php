<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\RoomController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\SampleController;
use App\Http\Controllers\Backend\BuyerController;
use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Middleware\IsAdmin;

// Middleware-protected dashboard routes
Route::middleware(['auth', IsAdmin::class])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('business-info', 'businessSettings')->name('business-setting');
        Route::post('business-info', 'businessSettingsUpdate')->name('business-setting-update');
        Route::get('profile', 'profile')->name('profile');
        Route::post('profile', 'profileUpdate')->name('profile.update');
    });

    // Teammember routes


    // Information routes

});

// Contact routes
Route::controller(ContactController::class)->group(function () {
    Route::get('/contacts', 'index')->name('contact.index');
    Route::delete('contacts/{id}/delete', 'delete')->name('contacts.delete');
});
Route::get('/sample/index', [SampleController::class, 'index'])->name('sample.index');
Route::delete('/sample/{id}', [SampleController::class, 'destroy'])->name('sample.destroy');
Route::get('/buyer/index', [BuyerController::class, 'index'])->name('buyer.index');
Route::delete('/buyer/{id}', [BuyerController::class, 'destroy'])->name('buyer.destroy');
Route::get('/vendor/index', [VendorController::class, 'index'])->name('vendor.index');
Route::delete('/vendor/{id}', [VendorController::class, 'destroy'])->name('vendor.destroy');
Route::get('/team/index', [TeamController::class, 'index'])->name('team.index');
Route::delete('/team/{id}', [TeamController::class, 'destroy'])->name('team.destroy');
