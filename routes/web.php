<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home_main');
});



Route::get('/about', function () {
    return view('about.about_main');
});





Route::get('/contact', function () {
    return view('contact.contact_main');
});