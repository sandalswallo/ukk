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

  Route::get('/paket/data', [OutletController::class, 'data'])->name('paket.data');
  Route::resource('/paket', OutletController::class);

  Route::get('/member/data', [MemberController::class, 'data'])->name('member.data');
  Route::resource('/member', MemberController::class);

  Route::get('/user/data', [UserController::class, 'data'])->name('user.data');
  Route::resource('/user', UserController::class);
  Route::get('/user/{id}/profile', [UserController::class, 'profile'])->name('user.profile');
  // Route::post('/profile/{id}', [UserController::class, 'update'])->name('profile.update');
});
