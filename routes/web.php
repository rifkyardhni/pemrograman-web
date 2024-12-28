<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/load-more', function () {
    return view('load-more');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/5-manfaat-merayakan-liburan-bersama-keluarga', function () {
    return view('single-blog');
});
Route::get('/ini-ciri-penyakit-tbc-yang-sudah-parah-dan-cara-mengobatinya', function () {
    return view('ini-ciri-penyakit-tbc-yang-sudah-parah-dan-cara-mengobatinya');
});
Route::get('/cara-menghilangkan-overthinking-untuk-kesehatan-mental', function () {
    return view('single-blog');
});
Route::get('/20-jenis-sayuran yang-mendukung-kesehatan-tubuh', function () {
    return view('single-blog');
});
Route::get('/single-blog', function () {
    return view('single-blog');
});
Route::get('/natal-sudah-tiba-hindari-makanan-tidak-sehat-ini', function () {
    return view('single-blog');
});
Route::get('/10-obat-diare-ampuh', function () {
    return view('single-blog');
});
Route::get('/suka-makan-mie-instan-ini-batas-aman-konsumsinya', function () {
    return view('single-blog');
});
Route::get('/ketahui-kadar-kolesterol-normal-berdasarkan-usia-dan-jenis-kelamin', function () {
    return view('single-blog');
});
Route::get('/badan-lemas-dan-kepala-pusing-kapan-perlu-ke-dokter', function () {
    return view('single-blog');
});
Route::get('/three-column', function () {
    return view('three-column');
});
Route::get('/faq', function () {
    return view('faq');
});