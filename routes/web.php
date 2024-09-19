<?php

use Illuminate\Support\Facades\Route;

Route::get('/website', function () {
    return view('website.index');
});
 