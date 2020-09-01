<?php

use App\search_page;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;

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

Route::get('/cari', 'WebController@cari')->name('cari');
Route::get('/profil/sejarah', 'WebController@displaySejarah')->name('sejarah');
Route::get('/profil/struktur', 'WebController@displayStruktur')->name('struktur');
Route::get('/profil/visi&misi', 'WebController@displayVisi')->name('visimisi');
Route::get('/program/kelompok-bermain', 'WebController@displayKB')->name('KB');
Route::get('/program/taman-penitipan-anak', 'WebController@displayTPA')->name('TPA');
Route::get('/galeri/foto', 'WebController@displayFoto')->name('Foto');
Route::get('/ekstrakurikuler', 'WebController@displayEks')->name('Eks');
Route::get('/download', 'WebController@displayDownload')->name('Download');
Route::resource('/paud', 'BukuTamuController');
Route::get('/bukutamu', 'BukuTamuController@index')->name('bukutamu');
Route::post('/paud/send', 'BukuTamuController@send')->name('sendEmail');
