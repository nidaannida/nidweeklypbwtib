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

$data_berita =[
    [
        "judul" => "Mahasiswa Teknologi Informasi",
        "penulis" => "Admin",
        "konten" => "Teknologi Informasi (TI) atau Information Technology (IT) adalah istilah umum untuk segala jenis teknologi yang membantu manusia dalam membuat, mengubah, menyimpan, mengomunikasikan, dan menyebarkan informasi"
    ],
    [
        "judul" => "Dosen Teknologi Informasi",
        "penulis" => "agus",
        "konten" => "Kim Tae-hyung atau lebih dikenal sebagai V adalah seorang penyanyi, penulis lagu, dan pemeran asal Korea Selatan. Ia merupakan anggota dari grup vokal pria BTS, yang dikelola oleh Big Hit Music."
    ]
];

    return view('BERITA',[
        "title" => "Berita",
        "beritas" => $data_berita,
    ]);
});

Route::get('/kontak', function () {
    return view('KONTAK',[
        "title" => "Kontak"
    ]);
});