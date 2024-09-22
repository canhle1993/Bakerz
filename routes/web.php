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
//Route cho client tìm kiếm thông tin sản phẩm
Route::get('/search', [ProductController::class, 'search'])->name('search');



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
Route::post('/admin/manage/client/{id}', [ManageClientController::class, 'update'])->name('client.update');
Route::delete('/admin/manage/client/{id}', [ManageClientController::class, 'destroy'])->name('client.destroy');

// Route quản lý Admin
use App\Http\Controllers\Admin\ManageAdminController;
Route::get('/admin/manage/admin', [ManageAdminController::class, 'index'])->name('manage-admin');
Route::get('/admin/manage/admin/create', [ManageAdminController::class, 'create'])->name('admin.create');
Route::post('/admin/manage/admin/store', [ManageAdminController::class, 'store'])->name('admin.store');
Route::get('/admin/manage/admin/{id}/edit', [ManageAdminController::class, 'edit'])->name('admin.edit');
Route::post('/admin/manage/admin/{id}', [ManageAdminController::class, 'update'])->name('admin.update');
Route::delete('/admin/manage/admin/{id}', [ManageAdminController::class, 'destroy'])->name('admin.destroy');



// Route cho client shop product types
Route::get('/product-simple', function () {
    return view('client.shop.product-types.product-simple');
})->name('product-simple');
Route::get('/product-grouped', function () {
    return view('client.shop.product-types.product-grouped');
})->name('product-grouped');
Route::get('/product-affiliate', function () {
    return view('client.shop.product-types.product-affiliate');
})->name('product-affiliate');

//Route cho client shop others
Route::get('/cart', function () {
    return view('client.shop.others.cart');
})->name('cart');
Route::get('/checkout', function () {
    return view('client.shop.others.checkout');
})->name('checkout');
Route::get('/wishlist', function () {
    return view('client.shop.others.wishlist');
})->name('wishlist');
Route::get('/order-tracking', function () {
    return view('client.shop.others.order-tracking');
})->name('order-tracking');

//Route cho client pages
Route::get('/about', function () {
    return view('client.pages.about');
})->name('about');
Route::get('/coming-soon', function () {
    return view('client.pages.coming-soon');
})->name('coming-soon');
Route::get('/faq', function () {
    return view('client.pages.faq');
})->name('faq');
Route::get('/our-chef', function () {
    return view('client.pages.our-chef');
})->name('our-chef');
Route::get('/pricing-plan', function () {
    return view('client.pages.pricing-plan');
})->name('pricing-plan');

//Route cho client blog
Route::get('/blog-detail', function () {
    return view('client.blog.blog-detail');
})->name('blog-detail');


//Route cho client contact
Route::get('/contact', function () {
    return view('client.contact');
})->name('contact');


//Route cho client category
Route::get('/category', function () {
    return view('client.category.category');
})->name('category');

//Route cho client services
Route::get('/delivery', function () {
    return view('client.services.delivery');
})->name('delivery');
Route::get('/exchange-return-policy', function () {
    return view('client.services.exchange-return-policy');
})->name('exchange-return-policy');

//route cho product_management trang admin
use App\Http\Controllers\Admin\ProductController as AdminProductController;
Route::resource('product', AdminProductController::class);
Route::get('product/{product}', [AdminProductController::class, 'showDetail'])->name('product.showDetail');
