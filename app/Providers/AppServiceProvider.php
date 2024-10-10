<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Catalog;
use App\Models\Chef;
use App\Models\ComingSoon;
use App\Models\DealOfTheDay;
use App\Models\Notification;
use App\Models\Product;
use App\Models\User;
use App\Models\UserReview;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\EventDispatcher\EventDispatcher;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->singleton(ErrorsManager::class, function ($app) {
        //     return new ErrorsManager($app['config']);
        // });
        $this->app->singleton(EventDispatcher::class, function () {
            return new EventDispatcher;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
            // Chia sẻ biến $catalogs đến tất cả view, lấy 6 category (4 đầu tiên và 2 cuối cùng)
        $catalogs = Catalog::where('isdelete', '<>', 1)
            ->orWhereNull('isdelete')
            ->get();

        View::share('categories', $catalogs); // Chia sẻ toàn bộ catalog (danh mục)

        // Chia sẻ biến $categories đến tất cả view
        $categories = Category::where('isdelete', '<>', 1)
            ->orWhereNull('isdelete')
            ->take(10)  // Giới hạn 4 category đầu tiên
            ->get();

        View::share('categories', $categories);

        // Chia sẻ biến $notifications đến tất cả các view
        View::composer('*', function ($view) {
            if (Auth::check()) { // Kiểm tra người dùng đã đăng nhập
                $notifications = Notification::where('user_id', Auth::id())
                    ->where('is_read', false)
                    ->get();
                
                $view->with('notifications', $notifications);
            }
        });

        View::composer('admin.*', function ($view) {
            if (Auth::check()) {
                // Lấy thông báo review chưa đọc
                $reviewNotifications = Notification::with('user')
                    ->where('is_read', 0)
                    ->where('type', 'review')  // Chỉ lấy thông báo thuộc loại review
                    ->orderBy('created_at', 'desc')
                    ->get();
    
                // Lấy thông báo order chưa đọc
                $orderNotifications = Notification::with('user')
                    ->where('is_read', 0)
                    ->where('type', 'order')  // Chỉ lấy thông báo thuộc loại order
                    ->orderBy('created_at', 'desc')
                    ->get();
    
                // Truyền cả hai loại thông báo vào view
                $view->with('reviewNotifications', $reviewNotifications);
                $view->with('orderNotifications', $orderNotifications);
            }
        });

        // Chia sẻ các đánh giá 5 sao đến tất cả view
        View::composer('*', function ($view) {
            // Lấy các đánh giá có 5 sao
            $fiveStarReviews = User::join('userreview', 'user.user_id', '=', 'userreview.user_id') // Sử dụng 'user.user_id'
            ->where('userreview.ratestar', '=', 5)
            ->whereIn('userreview.ID', function ($query) {
                $query->select(DB::raw('MAX(u3.ID)'))
                    ->from('userreview as u3')
                    ->where('u3.ratestar', '=', 5)
                    ->groupBy('u3.user_id');
            })
            ->select('user.user_id', 'user.name', 'user.email', 'user.avatar', 'userreview.comment', 'userreview.CreatedDate')
            ->orderBy('userreview.CreatedDate', 'desc')
            ->limit(5)  // Giới hạn chỉ lấy 5 kết quả
            ->get();

            // Chia sẻ biến $fiveStarReviews đến tất cả các view
            $view->with('fiveStarReviews', $fiveStarReviews);
        });

        // Chia sẻ đầy đủ danh sách đầu bếp cho tất cả các view trừ 'client.pages.about'
        View::composer('*', function ($view) {
            // Nếu không phải view 'client.pages.about', chia sẻ tất cả đầu bếp
            if (!in_array($view->getName(), ['client.pages.about'])) {
                $chefs = Chef::where('isdelete', 0)->get();
                $view->with('chefs', $chefs);
            }
        });

        // Chia sẻ chỉ 3 đầu bếp cho view 'client.pages.about'
        View::composer('client.pages.about', function ($view) {
            $chefs = Chef::where('isdelete', 0)->limit(3)->get(); // Lấy 3 đầu bếp
            $view->with('chefs', $chefs);
        });

            // Chia sẻ biến $deals đến tất cả view
    View::composer('*', function ($view) {
        $deals = DealOfTheDay::where('isdelete', 0)
            ->orderBy('promotion_date', 'desc') // Sắp xếp theo ngày khuyến mãi mới nhất
            ->take(1)  // Lấy 1 deal mới nhất
            ->get();

        $view->with('deals', $deals);
    });

    // Chia sẻ thông tin Coming Soon
    View::composer('*', function ($view) {
        $comingSoon = ComingSoon::where('isdelete', 0)
            ->orderBy('release_date', 'desc')
            ->take(1)  // Lấy 1 sản phẩm sắp ra mắt mới nhất
            ->get();
    
        $view->with('comingSoon', $comingSoon);
    });
    
    View::composer('*', function ($view) {
        // Lấy danh sách sản phẩm bán chạy nhất
        $bestSellingProducts = Product::join('orderdetails', 'product.product_id', '=', 'orderdetails.product_id')
            ->select('product.product_id', 'product.product_name', 'product.price', 'product.image', DB::raw('SUM(orderdetails.quantity) as total_quantity'))
            ->groupBy('product.product_id', 'product.product_name', 'product.price', 'product.image')
            ->orderBy('total_quantity', 'desc')
            ->take(5)  // Giới hạn lấy 5 sản phẩm bán chạy nhất
            ->get();

        // Chia sẻ biến $bestSellingProducts đến tất cả các view
        $view->with('bestSellingProducts', $bestSellingProducts);
    });

 }   
}
