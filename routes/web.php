<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/rtp', function () {
    return view('rtp.pragmatic', [
        'active' => 'Rtp'
    ]);
});

Route::get('/pragmatic', function () {
    return view('rtp.pragmatic');
});

Route::get('/habanero', function () {
    return view('rtp.habanero');
});

Route::get('/pgsoft', function () {
    return view('rtp.pgsoft');
});

Route::get('/microgaming', function () {
    return view('rtp.microgaming');
});

Route::get('/nextspin', function () {
    return view('rtp.nextspin');
});
