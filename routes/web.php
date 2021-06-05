<?php

use App\Http\Controllers\PelangganController;
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

Route::resource('/home', PelangganController::class);
// Route::get('/create0281', [PelangganController::class, 'create']);
Route::get('/home/tambah','PelangganController@create');
Route::post('/home/store','PelangganController@store');
Route::get('/home/edit/{id}','PegawaiController@edit');
Route::post('/home/update','PegawaiController@update');
Route::get('/home/destory/{id}','PegawaiController@destroy');

