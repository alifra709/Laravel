<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;
Route::get('/', function () {
// return view('welcome');
return redirect()->route('backend.login');
});
// Backend Beranda Route
Route::get('backend/beranda', [BerandaController::class, 'berandaBackend'])
    ->name('backend.beranda')
    ->middleware('auth');

// Login Routes
Route::get('backend/login', [LoginController::class, 'loginBackend'])
    ->name('backend.login');
    
Route::post('backend/login', [LoginController::class, 'authenticateBackend'])
    ->name('login');
    
Route::post('backend/logout', [LoginController::class, 'logoutBackend'])
    ->name('backend.logout');