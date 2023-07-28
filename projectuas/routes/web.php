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
    return view('index');
});

Route::get('/barang','BarangController@index')->name('barang.index');
Route::get('/barang/create','BarangController@create')->name('barang.create');
Route::post('/barang/store','BarangController@store')->name('barang.store');
Route::get('/barang/edit/{id}','BarangController@edit')->name('barang.edit');
Route::post('/barang/update/{id}','BarangController@update')->name('barang.update');
Route::get('/barang/delete/{id}','BarangController@destroy')->name('barang.destroy');



