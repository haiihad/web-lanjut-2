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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('foo', function () {
//     return 'Hello World';
// });
Route::get('/mhs','MahasiswaController@index');
//Mahasiswa
Route::get('/mhs', 'MahasiswaController@index')->name('mhs.index');
Route::get('/mhs/list', 'MahasiswaController@mhs_list')->name('mhs.list');
Route::get('/mhs/create', 'MahasiswaController@create');
Route::post('/mhs/store', 'MahasiswaController@store');
Route::get('/mhs/edit/{npm}', 'MahasiswaController@edit');
Route::patch('/mhs/update/{mahasiswa:npm}', 'MahasiswaController@update')->name('mhs.update');
Route::get('/mhs/delete/{mahasiswa:npm}', 'MahasiswaController@destroy')->name('mhs.delete');
//Prodi (Route Framework)
Route::resource('/prodi', 'ProdiController');
Route::get('/prodi/create', 'ProdiController@create');
Route::post('/prodi/store', 'ProdiController@store');
Route::get('/prodi/delete/{prodi:kode_prodi}', 'ProdiController@destroy');
Route::get('/prodi/edit/{kode_prodi}', 'ProdiController@edit');
Route::put('/prodi/update/{prodi:kode_prodi}', 'ProdiController@update')->name('prodi.update');