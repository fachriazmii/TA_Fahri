<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Symfony\Component\VarDumper\VarDumper;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    return view('welcome');
});

Route::get('/dosen/form', function () {
    return view('dosen/form');
});

Route::get('/repo/form', function () {
    return view('repo/form');
});

Route::get('/mahasiswa/form', function () {
    return view('mahasiswa/form');
});

Route::get('/matkul/form', function () {
    return view('matkul/form');
});

Route::get('/daftar_sidang/form', function () {
    return view('daftar_sidang/form');
});

Route::get('/skta/form', function () {
    return view('skta/form');
});

Route::get('/ujian_khusus/form', function () {
    return view('ujian_khusus/form');
});

Route::get('/users/form', function () {
    return view('users/form');
});
