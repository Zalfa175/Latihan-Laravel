<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {

    $nama = 'Nabila Zalfa Anandita';

    $lampu = 1;

    $kelas = env('KELAS', "Data Tidak Ada"); //di belakang koma adalah isi dari env yang tidak ada isinya

    $nilai = 'B';

    $perulangan_for = 100;

    $hobi_banyak = [
        'Bermain Bola',
        'Badminton',
        'Renang',
        'Bersepeda',
        'Jogging'
    ];

    return view('admin.login', [
        'nama' => $nama,
        'lampu' => $lampu,
        'kelas' => $kelas,
        'nilai' => $nilai,
        'limit' => $perulangan_for,
        'hobbies' => $hobi_banyak,
    ]);
});