<?php

use App\Http\Controllers\AbsensiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogbookController;
use App\Http\Controllers\PemagangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', [AuthManager::class, 'login'])->name(name: 'login');
Route::post('/loginPost', [AuthManager::class, 'loginPost'])->name(name: 'login.post');

Route::get('/pemagang', [PemagangController::class, 'pemagang'])->name(name: 'pemagang');
Route::post('/pemagang', [PemagangController::class, 'pemagangPost'])->name(name: 'pemagang.post');

Route::get('/logout', [AuthManager::class, 'logout'])->name(name: 'logout');

Route::group(['middleware' => ['auth',  'ceklevel:admin']], function() {

    Route::get('/register', [AuthManager::class, 'register'])->name(name: 'register');
    Route::post('/register.post', [AuthManager::class, 'registerPost'])->name(name: 'register.post');
});

Route::group(['middleware' => ['auth',  'ceklevel:admin,user']], function() {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name(name: 'dashboard');
});

Route::group(['middleware' => ['auth',  'ceklevel:user']], function() {

    Route::get('/absensi', [AbsensiController::class, 'absensi'])->name(name: 'absensi');
    Route::post('/absensi/store', [AbsensiController::class, 'store']);

    Route::get('/logbook', [LogbookController::class, 'logbook'])->name(name: 'logbook');
    Route::post('/logbook', [LogbookController::class, 'logbookPost'])->name(name: 'logbook.post');

});
