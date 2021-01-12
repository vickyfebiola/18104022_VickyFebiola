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

// route untuk halaman home, about, mahasiswa, tambah/edit/delete mahasiswa
Route::get('/', 'MyController@index' )->name('index');
Route::get('/about','MyController@about')->name('about');
Route::get('/mahasiswa','StudentController@index')->name('student.index');
Route::get('/mahasiswa/add','StudentController@create')->name('student.create');
Route::post('/mahasiswa/tambah','StudentController@store')->name('student.store');
Route::get('/mahasiswa/edit/{id}','StudentController@edit')->name('student.edit');
Route::put('/mahasiswa/edit/{id}','StudentController@update')->name('student.update');
Route::delete('/mahasiswa/delete/{id}','StudentController@destroy')->name('student.destroy');

// Route untuk halaman DataTables
Route::get('/mahasiswa/data','StudentController@data')->name('student.data');
Route::get('/mahasiswa/data/delete/{id}','StudentController@data_destroy')->name('student.data.destroy');
