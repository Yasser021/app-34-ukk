<?php

use App\Http\Controllers\bukuController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\sesiController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

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
    return view('user.landingPage');
})->name('home');

Route::get('/book', function () {
    return view('user.book');
});
Route::get('/detail', function () {
    return view('user.detail');
});
Route::get('/pinjam', function () {
    return view('user.borrow');
});
Route::get('/profile', function () {
    return view('user.profile');
});
Route::get('/buku', function () {
    return view('admin.table.tableBook');
});
Route::get('/category', function () {
    return view('admin.table.tableKategori');
});
Route::get('/review', function () {
    return view('admin.table.tableReview');
});
Route::get('/detreview', function () {
    return view('admin.detail.detailReview');
});
Route::get('/bor', function () {
    return view('admin.table.tableBorrow');
});
Route::get('/detbor', function () {
    return view('admin.detail.detailBorrow');
});
Route::get('/editbor', function () {
    return view('admin.edit.editBorrow');
});
Route::get('/user', function () {
    return view('admin.table.tableUser');
});
Route::get('/createuser', function () {
    return view('admin.create.createUser');
});
Route::get('/edituser', function () {
    return view('admin.edit.editUser');
});
Route::get('/createBook', function () {
    return view('admin.create.createBook');
});
Route::get('/editBook', function () {
    return view('admin.edit.editBook');
});
Route::get('/detailBook', function () {
    return view('admin.detail.detailBook');
});
Route::get('/sesi', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/sesi', [sesiController::class, 'index'])->name('sesi');
Route::post('/login', [sesiController::class, 'login'])->name('login');
Route::get('/showreg', [sesiController::class, 'showRegister'])->name('showreg');
Route::post('/register', [sesiController::class, 'register'])->name('register');
Route::get('/logout', [sesiController::class, 'logout'])->name('logout');

Route::resource('buku', bukuController::class);
Route::get('/buku/export_excel', [bukuController::class, 'export_excel'])->name('buku.export_excel');
Route::resource('kategori', kategoriController::class);
Route::resource('user', userController::class);
