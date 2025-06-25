<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Auth::routes();

Route::get('/', function () {
    return redirect('login');
})->middleware('guest');

Route::get('/', function () {
    return redirect('/dashboard');
})->middleware('auth');

Route::get('/home', function () {
    return redirect('/dashboard');
})->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard.index');
        Route::get('/reports', 'reports')->name('reports.index');
        Route::get('/availability', 'availability')->name('avail.index');
        Route::get('/information', 'information')->name('info.index');
        Route::get('/ssh', 'ssh')->name('ssh.index');
        Route::get('/users', 'users')->name('users.index');
    });
});
