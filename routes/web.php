<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/login', function () {

//     $nama = 'Nabila Zalfa Anandita';

//     $lampu = 1;

//     $kelas = env('KELAS', "Data Tidak Ada"); //di belakang koma adalah isi dari env yang tidak ada isinya

//     $nilai = 'B';

//     $perulangan_for = 100;

//     $hobi_banyak = [
//         'Bermain Bola',
//         'Badminton',
//         'Renang',
//         'Bersepeda',
//         'Jogging'
//     ];

//     return view('admin.login', [
//         'nama' => $nama,
//         'lampu' => $lampu,
//         'kelas' => $kelas,
//         'nilai' => $nilai,
//         'limit' => $perulangan_for,
//         'hobbies' => $hobi_banyak,
//     ]);
// });

Route::get('/home1', [HomeController::class, 'index']);

Route::get('/about1', [HomeController::class, 'about1']);

Route::get('/add', [HomeController::class, 'tambah']);

Route::post('/save', [HomeController::class, 'simpan']);

Route::get('/makanan', [HomeController::class, 'view_makanan']);

Route::get('/test_query_builder', [HomeController::class, 'test_query_builder']);

Route::get('/test_eloquent', [HomeController::class, 'test_eloquent']);