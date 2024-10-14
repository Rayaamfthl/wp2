<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\HtmlController;
use App\Http\Controllers\LatihanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('Helloworld', [HelloWorldController::class, 'index']);
Route::get('ambilfile', [HelloWorldController::class, 'ambilfile']);
Route::get('getlorem', [HtmlController::class, 'getlorem']);
Route::get('getTabel', [LatihanController::class, 'getTabel']);
Route::get('getForm', [LatihanController::class, 'getForm']);
