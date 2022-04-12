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
    return view('Auth.login');
});
Route::get('/login','LoginController@index');
Route::post('/postlogin','LoginController@login');
Route::get('/logout','LoginController@logout');

Route::group(['middleware'=>['auth','CheckRole:admin']],function(){
    Route::get('/rs','RSController@index');
    Route::delete('/rs/{id}','RSController@destroy')->name('rs.hapus');
    Route::get('/rs/edit/{id}','RSController@edit')->name('rs.edit');
    Route::get('/rs/tambah','RSController@create')->name('rs.tambah');
    Route::patch('/rs/{id}','RSController@update')->name('rs.update');
    Route::post('/postrs','RSController@store');

    Route::get('/pasien','PasienController@index');
    Route::delete('/pasien/{id}','PasienController@destroy')->name('pasien.hapus');
    Route::get('/pasien/edit/{id}','PasienController@edit')->name('pasien.edit');
    Route::get('/pasien/tambah','PasienController@create')->name('pasien.tambah');
    Route::patch('/pasien/{id}','PasienController@update')->name('pasien.update');
    Route::post('/postpasien','PasienController@store');
    Route::get('/filterpasien', 'PasienController@index')->name('filter.pasien');

});
