<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserInfoController;
use Illuminate\Support\Facades\Route;

use SimpleSoftwareIO\QrCode\Facades\QrCode as FacadesQrCode;

Route::get('/', function () {
  return redirect('/admin/login');
});

Route::get('/index', [UserInfoController::class, 'index']);
Route::get('/create', [UserInfoController::class, 'create']);
Route::post('/post', [UserInfoController::class, 'store']);
Route::get('/qrcode/{id}', [UserInfoController::class, 'generateUserQrCode']);
Route::get('/show/{id}', [UserInfoController::class, 'showUser']);
Route::delete('/users/{id}', [UserInfoController::class, 'destroy']);
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);
