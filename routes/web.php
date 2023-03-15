<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\OutletController;
use App\Http\Controllers\Admin\PaketController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DetailTransaksiController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\DashboardController;

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
    return view('landing_page', ['title' => 'Home']);
})->name('home');

// Route::get('admin', [ViewController::class,'admin']);
Route::get('auth/login',[AuthController::class,'login_view'])->name('login');
Route::post('auth/login_action',[AuthController::class,'login_action'])->name('login_action');
Route::get('logout',[AuthController::class,'logout'])->name('logout');

// Route::group(['middleware' => ['auth', 'check_role:admin' ]], function () {
        Route::get('admin', [ViewController::class,'admin'])->name('Vadmin');

        Route::get('admin/outlet', [OutletController::class,'index']);
        Route::get('admin/outlet/create', [OutletController::class,'create']);
        Route::post('/admin/outlet/store',[OutletController::class,'store'])->name('store_outlet');
        Route::get('admin/outlet/edit/{id}',[OutletController::class,'edit']);
        Route::post('admin/outlet/update',[OutletController::class,'update'])->name('update_outlet');
        Route::post('/admin/outlet/delete',[OutletController::class,'delete'])->name('delete_outlet');
        
        Route::get('admin/user', [UserController::class,'index']);
        Route::post('admin/user/store', [UserController::class,'store'])->name('store_user');
        Route::post('admin/user/update',[UserController::class,'update'])->name('update_user');
    
    Route::get('/pesan', [DashboardController::class,'create'])->name('pesan');
    Route::get('/about', [DashboardController::class,'about']);
// });

Route::group(['middleware' => ['auth', 'check_role:kasir' ]], function () {
Route::get('kasir', [ViewController::class,'kasir'])->name('Vkasir');

});

Route::get('member', [ViewController::class,'member'])->name('Vmember');




Route::get('admin/user', [UserController::class,'index']);
Route::post('admin/user/store', [UserController::class,'store'])->name('store_user');
Route::post('admin/user/update',[UserController::class,'update'])->name('update_user');



Route::get('admin/paket', [PaketController::class,'index']);
Route::post('/admin/paket/store',[PaketController::class,'store'])->name('store_paket');
Route::post('admin/paket/update',[PaketController::class,'update'])->name('update_paket');
Route::post('/admin/paket/delete',[PaketController::class,'delete'])->name('delete_paket');


Route::get('admin/member', [MemberController::class,'index']);
Route::post('/admin/member/store',[MemberController::class,'store'])->name('store_member');
Route::post('admin/member/update',[MemberController::class,'update'])->name('update_member');
Route::post('/admin/member/delete',[MemberController::class,'delete'])->name('delete_member');


Route::get('admin/transaksi', [TransaksiController::class,'index']);
Route::post('admin/transaksi/store', [TransaksiController::class,'store'])->name('store_transaksi');
Route::post('admin/transaksi/delete', [TransaksiController::class,'delete'])->name('delete_detail_transaksi');





Route::get('admin/transaksi/detail/{id}', [DetailTransaksiController::class,'index']);





Route::get('admin/laporan', [LaporanController::class,'index']);

