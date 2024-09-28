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
Route::get('/filter', [ClientController::class, 'filter'])->name('client.filter');
Route::get('/client/profile/user/{userid}', [ClientController::class, 'profile'])->name('client.profile');

use App\Http\Controllers\ProductController;

Route::get('/client/heathyfilter', [ProductController::class, 'filter'])->name('client.heathyfilter');

//Route cho client tìm kiếm thông tin sản phẩm
Route::get('/search', [ProductController::class, 'search'])->name('product_search');

//Rout cho client bấm vào danh mục sẽ hiện ra sản phẩm của danh mục đó
Route::get('/shop/category/{category_id}', [ProductController::class, 'filterByCategory'])->name('shop.category');



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
Route::post('/admin/manage/update-to-admin/{id}', [ManageAdminController::class, 'Upgradetoadmin'])->name('admin.update_to_admin');

// ---------------------------------------------------------------------------------------------------------------------------------------------------------------//


// Route cho Product và Other
Route::get('/shop_all', [ProductController::class, 'all_product'])->name('shop_all');
Route::get('productsingle/{product}', [ProductController::class, 'singleProduct'])->name('product.single');
Route::get('shop/category/{category_id}', [ProductController::class, 'filterByCategory'])->name('shop.filterByCategory');
Route::get('product/details/{id}', [ProductController::class, 'getProductDetails'])->name('product.details');








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
Route::get('/product/create', [AdminProductController::class, 'create'])->name('product.create');
Route::get('product/{product}/detail', [AdminProductController::class, 'showDetail'])->name('product.showDetail');
Route::delete('/product/{product}/delete', [AdminProductController::class, 'destroy'])->name('product.destroy');

//route cho catalog trang admin
use App\Http\Controllers\Admin\CategoryController;

Route::resource('catalog', CategoryController::class);

//route cho heathy trang admin
use App\Http\Controllers\Admin\HeathyController;

Route::resource('heathy', HeathyController::class);

//route cho discount trang admin
use App\Http\Controllers\Admin\DiscountController;

Route::resource('discount', DiscountController::class);
Route::get('/discount/{discount}/setup', [DiscountController::class, 'setup'])->name('discount.setup');
Route::get('/discount/updatesaleoff/{product_id}/{id}', [DiscountController::class, 'update_discount'])->name('discount.update_discount');
Route::delete('/discount/deletealeoff/{product_id}/{id}', [DiscountController::class, 'destroy_discount'])->name('discount.destroy_discount');

//Show thông tin sản phẩm khi người dùng bấm quick view
Route::get('/quickview', [ProductController::class, 'quickView'])->name('quickview');

use App\Http\Controllers\Admin\CartController;
//Thêm sản phẩm vào cart - xóa sản phẩm
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');

Route::post('/cart/new_add', [CartController::class, 'new_addToCart'])->name('cart.new_add');
Route::get('/cart/show', [CartController::class, 'showCart'])->name('cart.show');
Route::post('/cart/{product_id}/update_quantity', [CartController::class, 'update_quantity'])->name('cart.update_quantity');
Route::delete('/cart/{product_id}/delete', [CartController::class, 'deleteCart'])->name('cart.delete');
Route::post('/cart/checkout', [CartController::class, 'cart_checkout'])->name('cart.cart_checkout');

use App\Http\Controllers\ReviewController;

// Route để lưu đánh giá
Route::post('/reviews/store/{product_id}', [ReviewController::class, 'store'])->name('reviews.store');

// Route cho trang chi tiết sản phẩm
Route::get('productsingle/{product}', [ProductController::class, 'singleProduct'])->name('product.single');

// Route quản lý và xóa đánh giá
Route::get('/admin/reviews/manage', [ReviewController::class, 'manage'])->name('admin.reviews.manage');
Route::delete('/admin/reviews/{id}/delete', [ReviewController::class, 'delete'])->name('reviews.delete');

//Tính toán khoảng cách từ vị trí khách hàng đến cửa hàng
use App\Http\Controllers\CalculateDistanceController;

// Hiển thị trang để tính khoảng cách
Route::get('/client-location', [CalculateDistanceController::class, 'showLocation'])->name('client_location');

// Tính toán khoảng cách
Route::post('/calculate-distance', [CalculateDistanceController::class, 'calculateDistance']);
