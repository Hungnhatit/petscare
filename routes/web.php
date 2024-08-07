<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StoreLoginController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', [AdminLoginController::class, 'index']);


Route::get('login', function () {
    return view('login.login');
})->name('login');

Route::get('/login/employee', [LoginController::class, 'getLogin']);
Route::get('/register', function () {
    return view('managements.register');
});

Route::get('/duyetthanhtoan', function () {
    return view('managements.duyetthanhtoan');
});

Route::get('/capnhatdanhmuc', function () {
    return view('managements.capnhatdanhmuc');
});

Route::get('/dangkycuahang', function () {
    return view('managements.dangkycuahang');
});

Route::get('/capnhatdichvu', function () {
    return view('managements.capnhatdichvu');
});

Route::get('/guiyeucaudichvu', function () {
    return view('managements.guiyeucaudichvu');
});


Route::post('/login/employee', [LoginController::class, 'postLogin']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/login/store', [AdminLoginController::class, 'getStoreLogin']);
Route::post('/login/store', [AdminLoginController::class, 'postLogin']);
Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');

// Duyệt tài khoản
Route::get('/account', [AdminLoginController::class, 'index']);
Route::post('/update-status/{id}', [AdminLoginController::class, 'update']);
Route::delete('/delete-member/{id}', [AdminLoginController::class, 'destroy']);


//Xác nhận trả thú cưng
Route::get('/pets', [LoginController::class, 'index']);
Route::post('/confirm-return/{id}', [LoginController::class, 'update']);
