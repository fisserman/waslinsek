<?php

use GuzzleHttp\Middleware;
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
Route::get('/', function(){
    return view('/homepage');
});

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware'=> ['auth', 'checkRole:admin']], function(){
Route::get('/administrator/user_admin', 'UserController@admin');
Route::post('/user_admin/create', 'UserController@create');
Route::get('/administrator/{id}/delete', 'UserController@delete');
});

Route::get('/dashboard', 'DashController@page');
Route::get('/index', 'DashController@index');
Route::get('/layout2/index', 'DashController@index2');
Route::get('/dashboard', 'DashController@home');
Route::get('/profile/{id}/edit', 'DashController@edit');
Route::post('/profile/{id}/update', 'DashController@update');


Route::get('/administrator/{id}/edit', 'UserController@edit');
Route::post('/user_admin/{id}/update', 'UserController@update');

Route::get('/data_tim/index', 'PegawaiController@index' );
Route::post('/pegawai/create', 'PegawaiController@create');
Route::post('/data_tim/update', 'PegawaiController@update');
Route::get('/data_tim/{id}/delete', 'PegawaiController@delete');

Route::get('/perencanaan/index', 'PerencanaanController@index');
Route::get('/perencanaan/index2', 'PerencanaanController@index2');
Route::get('/perencanaan/index2/PRKP', 'PerencanaanController@index_PRKP');
Route::post('/perencanaan/create', 'PerencanaanController@create');
Route::get('/perencanaan/{id}/delete2', 'PerencanaanController@delete2');
Route::post('/perencanaan/{id}/update', 'PerencanaanController@update');

Route::get('/pemilihan/index', 'PemilihanController@index');
Route::post('/pemilihan/make', 'PemilihanController@make');
Route::get('/pemilihan/{id}/delete1', 'PemilihanController@delete1');
Route::post('/pemilihan/{id}/update', 'PemilihanController@update');

Route::get('/surat_tugas/pendidikan', 'SuratTugasController@index_pendidikan');
Route::get('/surat_tugas/kesehatan', 'SuratTugasController@index_kesehatan');
Route::get('/surat_tugas/kependudukan', 'SuratTugasController@index_kependudukan');
Route::post('/st/create/pendidikan', 'SuratTugasController@create_pendidikan');
Route::post('/st/create/kesehatan', 'SuratTugasController@create_kesehatan');
Route::post('/st/create/kependudukan', 'SuratTugasController@create_kependudukan');
Route::post('/st/update/pendidikan', 'SuratTugasController@update_pendidikan');
Route::post('/st/update/kesehatan', 'SuratTugasController@update_kesehatan');
Route::post('/st/update/kependudukan', 'SuratTugasController@update_kependudukan');
Route::get('/surat_tugas/{id}/delete', 'SuratTugasController@delete');
Route::get('/surat_tugas/download/{id}', 'SuratTugasController@unduh');

Route::get('/wilayah', 'WilayahController@index');
Route::post('/wilayah/create', 'WilayahController@create');

Route::get('/wilayah/getKabupaten/{id}', 'WilayahController@getKabupaten');
Route::get('/wilayah/getKecamatan/{id}', 'WilayahController@getKecamatan');
Route::get('/wilayah/getBidang/{id}', 'WilayahController@getBidang');
Route::get('/wilayah/getUnit/{id}', 'WilayahController@getUnit');
Route::get('/wilayah/getSubunit/{id}', 'WilayahController@getSubunit');
Route::get('/wilayah/check/{id}', 'WilayahController@check');
Route::post('/wilayah/post', 'WilayahController@post');

Route::get('/program', 'ProgramController@index');
Route::post('/program/create', 'ProgramController@create');
Route::get('/program/{id}/delete', 'ProgramController@delete');
Route::post('/program/{id}/update', 'ProgramController@update');

Route::get('/program/getProgram/{id}', 'ProgramController@getProgram');
Route::get('/program/getKegiatan/{id}', 'ProgramController@getKegiatan');

Route::get('/sasaran', 'SasaranController@index');
Route::post('/create/sasaran_pp', 'SasaranController@create_sasaran_pp');
Route::post('/create/sasaran_kp', 'SasaranController@create_sasaran_kp');
Route::post('/create/idk_pp', 'SasaranController@make_pp');
Route::post('/create/idk_kp', 'SasaranController@make_kp');

Route::get('/getProgram/{id}', 'SasaranController@getProgram');
Route::get('/getKegiatan/{id}', 'SasaranController@getKegiatan');
Route::get('/getSasaranKegiatan/{id}', 'SasaranController@getSasaranKegiatan');
Route::get('/getSasaranProgram/{id}', 'SasaranController@getSasaranProgram');
Route::post('/sasaran/update/pp', 'SasaranController@update_idk_pp');
Route::post('/sasaran/update/kp', 'SasaranController@update_idk_kp');
Route::get('/sasaran/create_pp', 'SasaranController@create_pp');
Route::get('/sasaran/create_kp', 'SasaranController@create_kp');
Route::get('/sasaran/{id}/delete_pp', 'SasaranController@delete_pp');
Route::get('/sasaran/{id}/delete_kp', 'SasaranController@delete_kp');

Route::get('/pelaksanaan/index', 'PelaksanaanController@index');
Route::get('/pelaksanaan/pendidikan', 'PelaksanaanController@index_pendidikan');

Route::get('/pelaksanaan/pendidikan/informasi', 'InformasiController@index');
Route::get('/pelaksanaan/getKabupaten/{id}', 'InformasiController@getKabupaten');
Route::post('/pelaksanaan/pendidikan/informasi/create', 'InformasiController@create');

Route::get('/pelaksanaan/pendidikan/tracing', 'RekalkulasiController@index');
Route::post('/pelaksanaan/pendidikan/tracing/create', 'RekalkulasiController@create');
Route::get('/pelaksanaan/getUsia/{id}', 'RekalkulasiController@getUsia');
Route::get('/pelaksanaan/getTarget/{id}', 'RekalkulasiController@getTarget');
Route::get('/pelaksanaan/getSasaran/{id}', 'RekalkulasiController@getIndikator');
