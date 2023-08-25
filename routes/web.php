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
    return redirect()->route( "login" );
});

Auth::routes();

//grouping routes if user log in
route::group(["middleware" => ["auth"]], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/roleCheck', [App\Http\Controllers\HomeController::class, 'roleCheck'])->name('roleCheck');
    Route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'create'])->name('mahasiswa.create');
    Route::post('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'store'])->name('mahasiswa.store');

    //show root get provinsi and kota
    Route::get('/data/provinsi', [App\Http\Controllers\FormController::class, 'getProvinsi'])->name('data.provinsi');
    Route::get('/data/kota/{provinsi_id}', [App\Http\Controllers\FormController::class, 'getKota'])->name('data.kota');
    
    Route::group(["middleware" => ["isAdmin"]], function(){
        Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
        Route::get('/mahasiswa/terima/{id}', [App\Http\Controllers\MahasiswaController::class,'setujui'])->name('mahasiswa.setujui');
        Route::get('/mahasiswa/tolak/{id}', [App\Http\Controllers\MahasiswaController::class,'tolak'])->name('mahasiswa.tolak');
        Route::get('/mahasiswa/{id}', [App\Http\Controllers\MahasiswaController::class,'detail'])->name('mahasiswa.detail');
    });


    Route::group(["middleware" => ["isUser"]], function(){
    });
    
});



