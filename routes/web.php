<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  return view('Frontend.index');
});

Route::get('/wait', function () {
    return view('wait');
})->name('wait');