<?php

use App\Http\Controllers\Admin\DanhsachmonanController;
use App\Http\Controllers\Admin\QuanlybaivietController;
use App\Http\Controllers\Admin\QuanlydanhmucController;
use App\Http\Controllers\Admin\QuanlydonhangController;
use App\Http\Controllers\Admin\QuanlylienheController;
use App\Http\Controllers\Admin\QuanlytaikhoanController;
use App\Http\Controllers\Admin\TongquanController;
use App\Http\Controllers\DangkiController;
use App\Http\Controllers\DangnhapController;
use App\Http\Controllers\GiohangController;
use App\Http\Controllers\LienheController;
use App\Http\Controllers\TrangchuController;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\TimkiemController;
use App\Http\Controllers\TintucController;
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


Route::prefix('quanly')->name('admin.')->group(function () {
    Route::prefix('tongquan')->name('tongquan.')->group(function () {
        Route::get('/', [TongquanController::class, 'index'])->name('index');
    });

    Route::prefix('quanlydonhang')->name('donhang.')->group(function () {
        Route::get('/', [QuanlydonhangController::class, 'index'])->name('index');
        Route::get('/chitiet', [QuanlydonhangController::class, 'chitietdonhang'])->name('chitiet');
        Route::post('/sua', [QuanlydonhangController::class, 'chinhsuadonhang'])->name('chinhsua');
    });

    Route::prefix('quanlybaiviet')->name('baiviet.')->group(function () {
        Route::get('/', [QuanlybaivietController::class, 'index'])->name('index');
        Route::get('/chitiet', [QuanlybaivietController::class, 'chitietbaiviet'])->name('chitietbaiviet');
        Route::get('/them', [QuanlybaivietController::class, 'taobaiviet'])->name('them');
        Route::post('/sua', [QuanlybaivietController::class, 'chinhsuabaiviet'])->name('chinhsua');
        Route::post('/xoa', [QuanlybaivietController::class, 'xoabaiviet'])->name('xoa');
    });

    Route::prefix('quanlytaikhoan')->name('taikhoan.')->group(function () {
        Route::get('/', [QuanlytaikhoanController::class, 'index'])->name('index');
        Route::get('/them', [QuanlytaikhoanController::class, 'taotaikhoan'])->name('them');
        Route::post('/sua', [QuanlytaikhoanController::class, 'chinhsuataikhoan'])->name('chinhsua');
        Route::get('/xoa', [QuanlytaikhoanController::class, 'xoataikhoan'])->name('xoa');
    });

    Route::prefix('quanlydanhmuc')->name('danhmuc.')->group(function () {
        Route::get('/', [QuanlydanhmucController::class, 'index'])->name('index');
        Route::get('/them', [QuanlydanhmucController::class, 'taodanhmuc'])->name('them');
        Route::get('/sua', [QuanlydanhmucController::class, 'chinhsuadanhmuc'])->name('chinhsua');
        Route::get('/xoa', [QuanlydanhmucController::class, 'xoadanhmuc'])->name('xoa');
    });

    Route::prefix('quanlylienhe')->name('lienhe.')->group(function () {
        Route::get('/', [QuanlylienheController::class, 'index'])->name('index');
    });

    Route::prefix('danhsachmonan')->name('monan.')->group(function () {
        Route::get('/', [DanhsachmonanController::class, 'index'])->name('index');
        Route::get('/chitiet', [DanhsachmonanController::class, 'chitietmonan'])->name('chitiet');
        Route::get('/them', [DanhsachmonanController::class, 'taomonan'])->name('them');
        Route::post('/sua', [DanhsachmonanController::class, 'chinhsuamonan'])->name('chinhsua');
        Route::post('/xoa', [DanhsachmonanController::class, 'xoamonan'])->name('xoa');
    });
});





Route::get('/', [TrangchuController::class, 'index'])->name('trangchu');

Route::get('/trangchu', [TrangchuController::class, 'index'])->name('Trangchu');

Route::get('/sanpham', [SanphamController::class, 'index'])->name('sanpham');

Route::get('/lienhe', [LienheController::class, 'index'])->name('lienhe');
Route::post('/lienhe', [LienheController::class, 'index'])->name('lienhe');

Route::get('/timkiem', [TimkiemController::class, 'index'])->name('timkiem');
Route::post('/timkiem', [TimkiemController::class, 'index'])->name('timkiem');

Route::get('/dangnhap', [DangnhapController::class, 'index'])->name('dangnhap');
Route::post('/dangnhap', [DangnhapController::class, 'index'])->name('dangnhap');

Route::get('/dangki', [DangkiController::class, 'index'])->name('dangki');
Route::post('/dangki', [DangkiController::class, 'index'])->name('dangki');

Route::get('/giohang', [GiohangController::class, 'index'])->name('giohang');

Route::get('/tintuc', [TintucController::class, 'index'])->name('tintuc');