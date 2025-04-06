<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Controllers\HelloWorldController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('HelloWorld', [HelloWorldController::class, 'index']);
Route::get('ambilfile', [HelloWorldController::class, 'ambilFile']);
Route::get('getlorem', [HtmlController::class, 'getLorem']);