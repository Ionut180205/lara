<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

require __DIR__ . '/auth.php';

Route::middleware(['auth', 'verified'])->group(function () {
    // dashboard-ul Breeze
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // pagina Users
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

});
require __DIR__.'/profile.php';
