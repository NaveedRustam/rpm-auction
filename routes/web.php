<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
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

Route::get('/', function () {
    return view('banners.home');
})->name('home');
Route::get('/auctions', function () {
    return view('banners.acutions');
})->name('auctions');
Route::get('/salvage', function () {
    return view('banners.salvage');
})->name('salvage');
Route::get('/drive', function () {
    return view('banners.drive');
})->name('drive');
Route::get('/about', function () {
    return view('banners.about');
})->name('about');
Route::get('/contact', function () {
    return view('banners.contact');
})->name('contact');

Route::get('/login', function () {
    return view('rpmlogin.login');
})->name('login');





