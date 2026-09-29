<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('HOME',[
        "title" => "Home"
    ]);
});

Route::get('/home', function () {
    return view('HOME',[
        "title" => "Home"
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        "name" => "Annida",
        "nim" => "13242520044",
        "prodi" => "Teknologi Informasi"
    ]);
});

Route::get('/berita', function () {
    return view('BERITA',[
        "title" => "Berita"
    ]);
});

Route::get('/kontak', function () {
    return view('KONTAK',[
        "title" => "Kontak"
    ]);
});