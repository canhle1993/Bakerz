<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Catalog;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
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
    }

    
}
