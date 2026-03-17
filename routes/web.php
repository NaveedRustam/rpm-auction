<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LegacyDataController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');




// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Roles
    // Route::resource('roles', RoleController::class);

    // Users
    Route::post('users/update-status', [UserController::class, 'updateStatus'])->name('users.update-status');
    Route::resource('users', UserController::class);

    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('users', UserController::class);
});
require __DIR__ . '/auth.php';

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/auctions', 'auctions')->name('auctions');
    Route::get('/salvage', 'salvage')->name('salvage');
    Route::get('/drive', 'drive')->name('drive');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
});

Route::controller(LegacyDataController::class)->group(function () {
    Route::get('assets/json/ajax.php', 'datatablesAjax')->name('legacy.datatables.ajax');
    Route::get('app-assets/data/ajax.php', 'datatablesAjax')->name('legacy.app-assets.ajax');
    Route::get('app-assets/data/fullcalendar/php/get-events.php', 'fullCalendarEvents')->name('legacy.fullcalendar.events');
    Route::get('app-assets/data/fullcalendar/php/get-timezones.php', 'fullCalendarTimezones')->name('legacy.fullcalendar.timezones');
});
