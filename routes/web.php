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


Route::prefix('quanly')->group(function () {
    Route::prefix('tongquan')->group(function () {
        Route::get('/', [TongquanController::class, 'index'])->name('admin-tongquan');
    });

    Route::prefix('quanlydonhang')->group(function () {
        Route::get('/', [QuanlydonhangController::class, 'index'])->name('admin-quanlydonhang');
        Route::get('/chitiet', [QuanlydonhangController::class, 'chitietdonhang'])->name('admin-chitietdonhang');
        Route::post('/sua', [QuanlydonhangController::class, 'chinhsuadonhang'])->name('admin-chinhsuadonhang');
    });

    Route::prefix('quanlybaiviet')->group(function () {
        Route::get('/', [QuanlybaivietController::class, 'index'])->name('admin-quanlybaiviet');
        Route::get('/chitiet', [QuanlybaivietController::class, 'chitietbaiviet'])->name('admin-chitietbaiviet');
        Route::get('/them', [QuanlybaivietController::class, 'taobaiviet'])->name('admin-taobaiviet');
        Route::post('/sua', [QuanlybaivietController::class, 'chinhsuabaiviet'])->name('admin-chinhsuabaiviet');
        Route::post('/xoa', [QuanlybaivietController::class, 'xoabaiviet'])->name('admin-xoabaiviet');
    });

    Route::prefix('quanlytaikhoan')->group(function () {
        Route::get('/', [QuanlytaikhoanController::class, 'index'])->name('admin-quanlytaikhoan');
        Route::get('/them', [QuanlytaikhoanController::class, 'taotaikhoan'])->name('admin-taotaikhoan');
        Route::post('/sua', [QuanlytaikhoanController::class, 'chinhsuataikhoan'])->name('admin-chinhsuataikhoan');
        Route::get('/xoa', [QuanlytaikhoanController::class, 'xoataikhoan'])->name('admin-xoataikhoan');
    });

    Route::prefix('quanlydanhmuc')->group(function () {
        Route::get('/', [QuanlydanhmucController::class, 'index'])->name('admin-quanlydanhmuc');
        Route::get('/them', [QuanlydanhmucController::class, 'taodanhmuc'])->name('admin-taodanhmuc');
        Route::get('/sua', [QuanlydanhmucController::class, 'chinhsuadanhmuc'])->name('admin-chinhsuadanhmuc');
        Route::get('/xoa', [QuanlydanhmucController::class, 'xoadanhmuc'])->name('admin-xoadanhmuc');
    });

    Route::prefix('quanlylienhe')->group(function () {
        Route::get('/', [QuanlylienheController::class, 'index'])->name('admin-quanlylienhe');
    });

    Route::prefix('danhsachmonan')->group(function () {
        Route::get('/', [DanhsachmonanController::class, 'index'])->name('admin-danhsachmonan');
        Route::get('/chitiet', [DanhsachmonanController::class, 'chitietmonan'])->name('admin-chitietmonan');
        Route::get('/them', [DanhsachmonanController::class, 'taomonan'])->name('admin-taomonan');
        Route::post('/sua', [DanhsachmonanController::class, 'chinhsuamonan'])->name('admin-chinhsuamonan');
        Route::post('/xoa', [DanhsachmonanController::class, 'xoamonan'])->name('admin-xoamonan');
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