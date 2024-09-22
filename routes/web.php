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


// dashboard
use App\Http\Controllers\Admin\DashboardController;
Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');




// Route quản lý Client

use App\Http\Controllers\Admin\ManageClientController;

Route::get('/admin/manage/client', [ManageClientController::class, 'index'])->name('manage-client');
Route::get('/admin/manage/client/create', [ManageClientController::class, 'create'])->name('client.create');
Route::post('/admin/manage/client/store', [ManageClientController::class, 'store'])->name('client.store');
Route::get('/admin/manage/client/{id}/edit', [ManageClientController::class, 'edit'])->name('client.edit');
Route::put('/admin/manage/client/{id}', [ManageClientController::class, 'update'])->name('client.update');
Route::delete('/admin/manage/client/{id}', [ManageClientController::class, 'destroy'])->name('client.destroy');
Route::get('/admin/manage/blacklist', [ManageClientController::class, 'blacklist'])->name('manage-blacklist');
Route::post('/admin/manage/blacklist/{id}/restore', [ManageClientController::class, 'restore'])->name('blacklist.restore');

// Route quản lý Admin
use App\Http\Controllers\Admin\ManageAdminController;
Route::get('/admin/manage/admin', [ManageAdminController::class, 'index'])->name('manage-admin');
Route::get('/admin/manage/admin/create', [ManageAdminController::class, 'create'])->name('admin.create');
Route::post('/admin/manage/admin/store', [ManageAdminController::class, 'store'])->name('admin.store');
Route::get('/admin/manage/admin/{id}/edit', [ManageAdminController::class, 'edit'])->name('admin.edit');
Route::post('/admin/manage/admin/{id}', [ManageAdminController::class, 'update'])->name('admin.update');
Route::delete('/admin/manage/admin/{id}', [ManageAdminController::class, 'destroy'])->name('admin.destroy');
Route::post('/admin/manage/lower-to-client/{id}', [ManageAdminController::class, 'lowerToClient'])->name('admin.lower_to_client');







//route cho product_management trang admin
use App\Http\Controllers\Admin\ProductController as AdminProductController;
Route::resource('product', AdminProductController::class);
Route::get('product/{product}', [AdminProductController::class, 'showDetail'])->name('product.showDetail');
