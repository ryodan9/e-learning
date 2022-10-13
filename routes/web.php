<?php

use App\Http\Controllers\AdminKelasController;
use App\Http\Controllers\AdminMapelController;
use App\Http\Controllers\AdminNilaiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminSoalController;
use App\Http\Controllers\AdminUjianController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\UjianController;
use App\Models\Mapel;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Resource_;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);//->name('home');

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function(){
    Route::get('/', [App\Http\Controllers\UserController::class, 'index']);//->middleware('auth');
    Route::get('mapel/{mapel}', [MapelController::class, 'index']);
    Route::get('ujian/{mapel}/{ujian_id}', [UjianController::class, 'index']);
    Route::post('ujian/{mapel}/{ujian_id}/save', [UjianController::class, 'save']);
    Route::get('nilai', [NilaiController::class, 'index']);
    Route::get('jawaban/{guj}', [NilaiController::class, 'jawaban']);
});

// Route::get('/protected', [App\Http\Controllers\ProtectedController::class, 'index']);

Route::group(['middleware' => 'auth', 'as'=>'admin'], function(){
Route::get('/admin',  [App\Http\Controllers\AdminController::class, 'index']);//->middleware('auth');

// Route::resource('/admin/mapel', AdminMapelController::class);
Route::get('/admin/mapel', [AdminMapelController::class, 'index']);
Route::post('/admin/mapel/store', [AdminMapelController::class, 'store']);
Route::get('/admin/mapel/destroy/{id}', [AdminMapelController::class, 'destroy']);

// Route::resource('/admin/kelas', AdminKelasController::class);
Route::get('/admin/kelas', [AdminKelasController::class, 'index']);
Route::post('/admin/kelas/store', [AdminKelasController::class, 'store']);
Route::get('/admin/kelas/destroy/{id}', [AdminKelasController::class, 'destroy']);

// Route::resource('/admin/ujian', AdminUjianController::class);//->middleware('auth');
Route::get('/admin/ujian', [AdminUjianController::class, 'index']);
Route::get('/admin/ujian/create', [AdminUjianController::class, 'create']);
Route::post('/admin/ujian/store', [AdminUjianController::class, 'store']);
Route::get('/admin/ujian/edit/{id}', [AdminUjianController::class, 'edit']);
Route::post('/admin/ujian/update/{id}', [AdminUjianController::class, 'update']);
Route::get('/admin/ujian/destroy/{id}', [AdminUjianController::class, 'destroy']);

// Route::resource('/admin/soal', AdminSoalController::class);//->middleware('auth');
Route::get('/admin/soal/{ujian_id}', [AdminSoalController::class, 'index']);
Route::get('/admin/soal/{id}/create', [AdminSoalController::class, 'create']);
Route::post('/admin/soal/store', [AdminSoalController::class, 'store']);
Route::get('/admin/soal/{ujian_id}/edit/{id}', [AdminSoalController::class, 'edit']);
Route::post('/admin/soal/update/{id}', [AdminSoalController::class, 'update']);
Route::get('/admin/soal/{ujian_id}/destroy/{id}', [AdminSoalController::class, 'destroy']);
Route::get('/admin/gen', [AdminSoalController::class, 'gen']);

Route::get('/admin/nilai', [AdminNilaiController::class, 'index']);
Route::get('/admin/nilai/destroy/{id}', [AdminNilaiController::class, 'destroy']);
});