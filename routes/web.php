<?php

use Illuminate\Support\Facades\Route;

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




Route::get('user/list', function () {
    return view('user.list');
});
Route::get('login/login', function () {
    return view('login.login');
});
Route::get('user/create', function () {
    return view('user.create');
});
Route::get('diemdanh/diemdanh', function () {
    return view('diemdanh.diemdanh');
});
Route::get('sinhvien/list', function () {
    return view('sinhvien.list');
});
Route::get('giaodien/giaodien', function () {
    return view('giaodien.giaodien');
});
Route::get('lop/list', function () {
    return view('lop.list');
});