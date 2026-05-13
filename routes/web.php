<?php

use Illuminate\Support\Facades\Route;

// Halaman Utama
Route::get('/', function () {
    // Data Dummy Projek
    $projects = [
        [
            'id' => 1,
            'title' => 'Sistem Informasi Absensi PKL',
            'desc' => 'Aplikasi absensi berbasis web menggunakan Laravel dan QR Code.',
            'image' => 'https://via.placeholder.com/600x400/1e3a8a/ffffff?text=Absensi+PKL'
        ],
        [
            'id' => 2,
            'title' => 'E-Commerce Alat Sekolah',
            'desc' => 'Toko online sederhana dengan fitur keranjang belanja.',
            'image' => 'https://via.placeholder.com/600x400/1e3a8a/ffffff?text=E-Commerce'
        ]
    ];
    return view('welcome', compact('projects'));
});

// Halaman Detail Projek
Route::get('/project/{id}', function ($id) {
    // Di sini nanti harusnya ambil dari database, tapi kita pakai manual dulu
    return view('detail', ['id' => $id]);
});

