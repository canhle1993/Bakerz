<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Catalog;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
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
            ->take(6)  // Giới hạn 4 category đầu tiên
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
    }
    
}
