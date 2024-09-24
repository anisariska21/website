<?php

use Illuminate\Support\Facades\Route;

Route::get('/landingpage', function () {
    return view('landingpage.index');
});
 