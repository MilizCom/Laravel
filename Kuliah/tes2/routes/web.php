<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'user']);

Route::get('/bio', function () {
    return view('bio');
});
Route::get('/kesukaan', function () {
    return view('kesukaan');
});
Route::get('/benci', function () {
    return view('benci');
});
Route::get('/cita2', function () {
    return view('cita2');
});
// Route::get('/about', [HomeController::class, 'AboutController']);
