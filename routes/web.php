<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ViewArticleController;

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

Route::get('about', function () {
    return view('about');
});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);


Route::prefix('dashboard')->group(function (){
    Route::prefix('perdinku')->group(function() {
        Route::get('/', \App\Http\Controllers\PerdinkuController::class, 'index');
    });
    Route::prefix('pengajuan-perdin')->group(function() {
        Route::get('/', \App\Http\Controllers\PengajuanPerdinController::class, 'index');
    });
    Route::prefix('master-kota')->group(function() {
        Route::get('/', \App\Http\Controllers\MasterKotaController::class, 'index');
    });
    Route::prefix('roles')->group(function() {
        Route::get('/', \App\Http\Controllers\RolesController::class, 'index');
    });
    // Route::prefix('roles')->group(function() {
    //     Route::get('/', \App\Http\Controllers\PengajuanPerdinController::class, 'index');
    // });
});
