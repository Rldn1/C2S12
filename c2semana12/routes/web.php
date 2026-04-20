<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mipagina', function () {
    return view('newpag');
}) ->name('mipagina');