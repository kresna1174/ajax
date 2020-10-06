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

Route::group(['prefix' => 'obat'], function(){
    Route::get('/', 'App\Http\Controllers\ObatController@index')->name('obat');
    Route::get('get', 'App\Http\Controllers\ObatController@get')->name('obat.get');
    Route::get('delete/{id?}', 'App\Http\Controllers\ObatController@delete')->name('obat.delete');
});

Route::group(['prefix' => 'barang'], function(){
    Route::get('/', 'App\Http\Controllers\BarangController@index')->name('barang');
    Route::get('get', 'App\Http\Controllers\BarangController@get')->name('barang.get');
    Route::post('add', 'App\Http\Controllers\BarangController@add')->name('barang.add');
    Route::get('delete/{id?}', 'App\Http\Controllers\BarangController@delete')->name('barang.delete');
});
