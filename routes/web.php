<?php

use Illuminate\Support\Facades\Route;
use PharIo\Manifest\AuthorCollection;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\{
  DashboardController,
  UserController,
  MemberController,
  OutletController,
  PaketController,
  CucianController,
  JenisPaketController,
  LayananController,
  BeratController,
  TransaksiController,
};

Route::get('/', function () {
  return view('home.welcome');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth', 'checkRole:admin'], function () {
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

  //route outlet
  Route::get('/outlet/data', [OutletController::class, 'data'])->name('outlet.data');
  Route::resource('/outlet', OutletController::class);

  //route paket
  Route::get('/paket/data', [PaketController::class, 'data'])->name('paket.data');
  Route::resource('/paket', PaketController::class);

  //route member
  Route::get('/member/data', [MemberController::class, 'data'])->name('member.data');
  Route::resource('/member', MemberController::class);

  //route user
  Route::get('/user/data', [UserController::class, 'data'])->name('user.data');
  Route::resource('/user', UserController::class);
  Route::get('/user/{id}/profile', [UserController::class, 'profile'])->name('user.profile');
  // Route::post('/profile/{id}', [UserController::class, 'update'])->name('profile.update');


  //route cucian
  Route::get('/cucian/data', [CucianController::class, 'data'])->name('cucian.data');
  Route::resource('/cucian', CucianController::class);

  //route jenis paket
  Route::get('/jenispaket/data', [JenisPaketController::class, 'data'])->name('jenispaket.data');
  Route::resource('/jenispaket', JenisPaketController::class);

  //route layanan
  Route::get('/layanan/data', [LayananController::class, 'data'])->name('layanan.data');
  Route::resource('/layanan', LayananController::class);

  //route berat
  Route::get('/berat/data', [BeratController::class, 'data'])->name('berat.data');
  Route::resource('/berat', BeratController::class);

  //route transaksi
  Route::get('/transaksi/data', [TransaksiController::class, 'data'])->name('transaksi.data');
  Route::resource('/transaksi', TransaksiController::class);




});
