<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home_main');
});



Route::get('/about', function () {
    return view('about.about_main');
});


Route::get('/services', function () {
    return view('services.services_main');
});


Route::get('/projects', function () {
    return view('projects.projects_main');
});


Route::get('/contact', function () {
    return view('contact.contact_main');
});