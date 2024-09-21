<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Routes cho chức năng đăng ký
use App\Http\Controllers\Auth\RegisterController;
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/getpassword', [RegisterController::class, 'showGetPasswordForm'])->name('auth.getpass');
Route::get('/changepassword', [RegisterController::class, 'showChangePasswordForm'])->name('auth.changepass');
Route::post('/change-password', [RegisterController::class, 'changepass'])->name('auth.Changed');

// Route cho client
use App\Http\Controllers\ClientController;
Route::get('/', [ClientController::class, 'home'])->name('client.home');
Route::get('/client/profile/user/{userid}', [ClientController::class, 'profile'])->name('client.profile');

use App\Http\Controllers\ProductController;

Route::get('/client/heathyfilter', [ProductController::class, 'filter'])->name('client.heathyfilter');



// Route cho logout
use Illuminate\Support\Facades\Auth;
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// Route cho reset pass
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\UserController;

Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('getpass');
Route::post('/update-avatar', [App\Http\Controllers\UserController::class, 'updateAvatar'])->name('update-avatar');
Route::post('/profile/update', [UserController::class, 'update'])->name('profile.update');




// Route cho admin
use App\Http\Controllers\Admin\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

//route cho product_management trang admin
use App\Http\Controllers\Admin\ProductController as AdminProductController;
Route::resource('product', AdminProductController::class);
Route::get('product/{product}', [AdminProductController::class, 'showDetail'])->name('product.showDetail');
