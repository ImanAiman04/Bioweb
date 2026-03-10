<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::view('/about_me', 'about_me');
Route::view('/home_state', 'home_state');
Route::view('/university', 'university');
Route::view('/travel_country', 'travel_country');
Route::view('/achievement', 'achievement');