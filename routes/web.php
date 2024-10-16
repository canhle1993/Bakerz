<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
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
Route::get('/client/order-details/{orderId}', [ClientController::class, 'getOrderDetails'])->name('client.orderdetails');


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



// Route quản lý Admin
use App\Http\Controllers\Admin\ManageAdminController;


// Route để đánh dấu thông báo là đã đọc và chuyển hướng đến trang review
Route::get('/admin/message/read/{id}', [DashboardController::class, 'markAsRead'])->name('message.read');
Route::get('/admin/notify/read/{id}', [DashboardController::class, 'markasreadOrder'])->name('notification.read');


Route::get('/admin/manage/admin', [ManageAdminController::class, 'index'])->name('manage-admin');
Route::get('/admin/manage/admin/create', [ManageAdminController::class, 'create'])->name('admin.create');
Route::post('/admin/manage/admin/store', [ManageAdminController::class, 'store'])->name('admin.store');
Route::get('/admin/manage/admin/{id}/edit', [ManageAdminController::class, 'edit'])->name('admin.edit');
Route::post('/admin/manage/admin/{id}', [ManageAdminController::class, 'update'])->name('admin.update');
Route::delete('/admin/manage/admin/{id}', [ManageAdminController::class, 'destroy'])->name('admin.destroy');
Route::post('/admin/manage/lower-to-client/{id}', [ManageAdminController::class, 'lowerToClient'])->name('admin.lower_to_client');
Route::post('/admin/manage/update-to-admin/{id}', [ManageAdminController::class, 'Upgradetoadmin'])->name('admin.update_to_admin');
Route::post('/admin/upgrade_to_super/{id}', [ManageAdminController::class, 'upgradeToSuper'])->name('admin.up_to_super');
Route::post('/category/restore/{id}', [ManageAdminController::class, 'restoreCategory'])->name('category.restore');
Route::post('/product/restore/{id}', [ManageAdminController::class, 'restoreProduct'])->name('product.restore');
Route::get('/admin/manage/blacklist', [ManageAdminController::class, 'blacklist'])->name('manage-blacklist');
Route::post('/blacklist/restore/{id}', [ManageAdminController::class, 'restoreUser'])->name('blacklist.restore');
Route::delete('delete/product/{id}', [ManageAdminController::class, 'delete'])->name('product.delete');
Route::delete('/blacklist/delete/{id}', [ManageAdminController::class, 'deleteUser'])->name('user.delete');
Route::delete('/category/delete/{id}', [ManageAdminController::class, 'deletecategory'])->name('category.delete');
Route::delete('/category/destoy/{id}', [ManageAdminController::class, 'destroy'])->name('client.destroy');




// ---------------------------------------------------------------------------------------------------------------------------------------------------------------//


// Route cho Product và Other
Route::get('/shop_all', [ProductController::class, 'all_product'])->name('shop_all');
Route::get('productsingle/{product}', [ProductController::class, 'singleProduct'])->name('product.single');
Route::get('/single-product/{id}', [ProductController::class, 'show'])->name('single-product');
Route::get('shop/category/{category_id}', [ProductController::class, 'filterByCategory'])->name('shop.filterByCategory');
Route::get('/shop/filter-by-category/{category_id}', [ProductController::class, 'filterByCategory'])->name('shop.filterByCategory');
Route::get('product/details/{id}', [ProductController::class, 'getProductDetails'])->name('product.details');
Route::get('/shop/filter-by-coffee', [ProductController::class, 'filterByCoffee'])->name('shop.filterByCoffee');
Route::get('shop/{isOption}/filter_nonCatagory}', [ProductController::class, 'filter_nonCatagory'])->name('shop.filter_nonCatagory');







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


Route::resource('product', AdminProductController::class)->except(['show']);
Route::get('/product/create', [AdminProductController::class, 'create'])->name('product.create');
Route::get('product/{product}/detail', [AdminProductController::class, 'showDetail'])->name('product.showDetail');
Route::delete('/product/{product}/delete', [AdminProductController::class, 'destroy'])->name('product.destroy');
Route::get('/product/index2', [AdminProductController::class, 'index2'])->name('product.index2');
Route::get('/product/index_instock', [AdminProductController::class, 'index_instock'])->name('product.index_instock');
Route::get('/product/index_outstock', [AdminProductController::class, 'index_outstock'])->name('product.index_outstock');
Route::get('/product/index_stockcheck', [AdminProductController::class, 'index_stockcheck'])->name('product.index_stockcheck');
Route::post('/product/{id}/goto_stockin', [AdminProductController::class, 'goto_stockin'])->name('product.goto_stockin');
Route::post('/product/goallquanlity_stockin', [AdminProductController::class, 'goallquanlity_stockin'])->name('product.goallquanlity_stockin');
Route::post('/product/goallto_stockin', [AdminProductController::class, 'goallto_stockin'])->name('product.goallto_stockin');
Route::post('/product/{id}/stockin_byid', [AdminProductController::class, 'stockin_byid'])->name('product.stockin_byid');
Route::post('/product/stockin_all', [AdminProductController::class, 'stockin_all'])->name('product.stockin_all');
Route::post('/product/{id}/stockin_cancel', [AdminProductController::class, 'stockin_cancel'])->name('product.stockin_cancel');


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
Route::get('/showcheckout', [CartController::class, 'showcheckout'])->name('checkout');
Route::post('/cart/checkout', [CartController::class, 'cart_checkout'])->name('cart.cart_checkout');
Route::post('/cart/Recheckout', [CartController::class, 'cart_Recheckout'])->name('cart.cart_Recheckout');
Route::post('/cart/{orderId}/cart_cancel', [CartController::class, 'cart_cancel'])->name('cart.cart_cancel');
Route::get('/cart/checkinventory', [CartController::class, 'checkinventory'])->name('cart.checkinventory');
Route::delete('/cart/clear_cart', [CartController::class, 'clear_cart'])->name('cart.clear');


// Route để lưu đánh giá
Route::post('/reviews/store/{product_id}', [ReviewController::class, 'store'])->name('reviews.store');

// Route cho trang chi tiết sản phẩm
Route::get('productsingle/{product}', [ProductController::class, 'singleProduct'])->name('product.single');

// Route quản lý và xóa đánh giá
Route::get('/admin/reviews/manage', [ReviewController::class, 'manage'])->name('admin.reviews.manage');
Route::delete('/admin/reviews/{id}/delete', [ReviewController::class, 'delete'])->name('reviews.delete');
Route::post('/admin/reviews/{id}/reply', [ReviewController::class, 'reply'])->name('reviews.reply');
Route::post('/reviews/{id}/reply', [ReviewController::class, 'reply'])->name('reviews.reply');


//Tính toán khoảng cách từ vị trí khách hàng đến cửa hàng
use App\Http\Controllers\CalculateDistanceController;


// Hiển thị trang để tính khoảng cách
Route::get('/client-location', [CalculateDistanceController::class, 'showLocation'])->name('client_location');

// Tính toán khoảng cách
Route::post('/calculate-distance', [CalculateDistanceController::class, 'calculateDistance']);

// VNPAY return
use App\Http\Controllers\PaymentController;

Route::get('/vnpay-return', [PaymentController::class, 'vnpayReturn'])->name('vnpay.return');

use App\Http\Controllers\Admin\OrderController;

Route::get('/order/pending', [OrderController::class, 'pending'])->name('order.pending');
Route::post('/order/{order_id}/pending', [OrderController::class, 'gotoPaid'])->name('order.gotopaid');
Route::get('/order/paid', [OrderController::class, 'paid'])->name('order.paid');
Route::post('/order/{order_id}/paid', [OrderController::class, 'gotoConfirmed'])->name('order.gotoConfirmed');
Route::get('/order/confirmed', [OrderController::class, 'confirmed'])->name('order.confirmed');
Route::post('/order/{order_id}/confirmed', [OrderController::class, 'gotoDelivered'])->name('order.gotoDelivered');
Route::get('/order/delivered', [OrderController::class, 'delivered'])->name('order.delivered');

Route::get('/order/cancel', [OrderController::class, 'cancel'])->name('order.cancel');
Route::post('/order/{order_id}/cancel', [OrderController::class, 'gotoCancel'])->name('order.gotoCancel');


//Đếm số lượng người truy cập web
use App\Http\Controllers\OnlineUserController;

Route::get('/online-users', [OnlineUserController::class, 'countOnlineUsers'])->name('online-users');

//route cho banner trang admin
use App\Http\Controllers\Admin\BannerController;

Route::resource('banner', BannerController::class);


use App\Http\Controllers\ChefController;
use App\Http\Controllers\AdminChefController;

// Route để hiển thị danh sách các Chef trên trang client
Route::get('/our-chef', [ChefController::class, 'index'])->name('our-chef');

// Route quản lý Chef cho admin
Route::prefix('admin')->group(function () {
    // Hiển thị trang quản lý Chef (bao gồm form thêm và danh sách Chef)
    Route::get('/chefs', [AdminChefController::class, 'create'])->name('admin.chefs.create');

    // Lưu Chef mới
    Route::post('/chefs', [AdminChefController::class, 'store'])->name('admin.chefs.store');

    // Cập nhật Chef (Sửa Chef)
    Route::put('/chefs/{id}', [AdminChefController::class, 'update'])->name('admin.chefs.update');

    // Xóa Chef
    Route::delete('/chefs/{id}', [AdminChefController::class, 'destroy'])->name('admin.chefs.destroy');
});




use App\Http\Controllers\BlogController;

// Blog routes
Route::prefix('admin/blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::post('/store', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/update/{id}', [BlogController::class, 'update'])->name('blog.update');  // Chỉ định phương thức PUT
    Route::delete('/delete/{id}', [BlogController::class, 'destroy'])->name('blog.delete');
});



Route::get('/client/blog', [BlogController::class, 'showBlog'])->name('client.blog');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog-pd');


//Thả tim cho sản phẩm để vào trang wishlist
Route::post('/add-to-wishlist', [ProductController::class, 'addToWishlist'])->name('add.to.wishlist');
Route::get('/wishlist', [ProductController::class, 'showWishlist'])->name('wishlist');
Route::post('/remove-from-wishlist', [ProductController::class, 'removeFromWishlist'])->name('remove.from.wishlist');

Route::get('/about', [ReviewController::class, 'showFiveStarReviews'])->name('about');


// Định tuyến cho Deal of the Day
use App\Http\Controllers\Admin\DealOfTheDayController;

// Group route cho admin
Route::prefix('admin')->name('admin.')->group(function() {

    // Route để hiển thị danh sách Deal
    Route::get('/deal-of-the-day', [DealOfTheDayController::class, 'index'])->name('deal.index');

    // Route để thêm Deal mới
    Route::post('/deal-of-the-day/store', [DealOfTheDayController::class, 'store'])->name('deal.store');

    // Route để cập nhật Deal
    Route::put('/deal-of-the-day/{id}/update', [DealOfTheDayController::class, 'update'])->name('deal.update');

    // Route để xóa Deal
    Route::put('/deal-of-the-day/{id}/delete', [DealOfTheDayController::class, 'destroy'])->name('deal.destroy');
});

use App\Http\Controllers\Admin\ComingSoonController;

Route::prefix('admin')->name('admin.')->group(function() {
    // Routes cho Coming Soon
    Route::get('/coming-soon', [ComingSoonController::class, 'index'])->name('coming_soon.index');
    Route::post('/coming-soon/store', [ComingSoonController::class, 'store'])->name('coming_soon.store');
    Route::put('/coming-soon/{id}/update', [ComingSoonController::class, 'update'])->name('coming_soon.update');
    Route::put('/coming-soon/{id}/delete', [ComingSoonController::class, 'destroy'])->name('coming_soon.destroy');
});


use App\Http\Controllers\ContactUsController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact_us.index');
    Route::get('/contact-us/reply/{id}', [ContactUsController::class, 'showReplyForm'])->name('contact_us.reply'); // Hiển thị form trả lời
    Route::post('/contact-us/reply/{id}', [ContactUsController::class, 'sendReply'])->name('contact_us.sendReply'); // Gửi trả lời
    Route::delete('/contact-us/delete/{id}', [ContactUsController::class, 'delete'])->name('contact_us.delete'); // Xóa thông tin liên hệ
});
Route::post('contact-us/store', [ContactUsController::class, 'store'])->name('contact.store');


use App\Http\Controllers\WorkshopController;
Route::prefix('admin/workshop')->group(function () {
    Route::get('/', [WorkshopController::class, 'index'])->name('admin.workshop.index');
    Route::post('/approve/{id}', [WorkshopController::class, 'approve'])->name('admin.workshop.approve');
    Route::post('/cancel/{id}', [WorkshopController::class, 'cancel'])->name('admin.workshop.cancel');
    Route::delete('/delete/{id}', [WorkshopController::class, 'delete'])->name('admin.workshop.delete');
    Route::post('/register-workshop', [WorkshopController::class, 'registerWorkshop'])->name('workshop.register');
});

Route::get('/clear-success-session', function () {
    session()->forget('isdone');
    session()->forget('iserror');
    return response()->json(['message' => 'Session cleared']);
})->name('session.clearSuccess');

use App\Http\Controllers\Admin\SocialMediaController;

// Route to display the Social Media page
Route::get('/admin/socialmedia', [SocialMediaController::class, 'index'])->name('admin.socialmedia.index');

// Route to store a new Social Media link
Route::post('/admin/socialmedia/store', [SocialMediaController::class, 'store'])->name('admin.socialmedia.store');

// Route to update an existing Social Media link
Route::put('/admin/socialmedia/update/{id}', [SocialMediaController::class, 'update'])->name('admin.socialmedia.update');

// Route to soft delete a Social Media link
Route::delete('/admin/socialmedia/delete/{id}', [SocialMediaController::class, 'destroy'])->name('admin.socialmedia.delete');

