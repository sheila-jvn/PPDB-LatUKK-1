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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/alert', function () {
    return view('alert');
});
Route::resource('pendaftars', 'PendaftarController');
Route::get('/laporans', 'LaporanController@index')->name('laporans');
Route::get('/laporans/cari', 'LaporanController@cari');
Route::get('/laporans/print', 'LaporanController@print')->name('laporans.print');
