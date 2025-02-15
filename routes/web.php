<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['judul' => 'Home Page']);
});

Route::get('/courses', function () {
    return view('courses', ['judul' => 'Daftar Kursus']);
});

Route::get('/contacts', function () {
    return view('contacts', ['judul' => 'Hubungi Kami']);
});

Route::get('/about', function () {
    return view('about', ['judul' => 'Tentang Kita']);
});
