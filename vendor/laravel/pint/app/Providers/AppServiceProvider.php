<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Notification;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Thêm View Composer để truyền biến notifications vào tất cả các view
        View::composer('admin.*', function ($view) {
            if (Auth::check()) {
                $notifications = Notification::with('user')
                    ->where('is_read', 0)
                    ->orderBy('created_at', 'desc')
                    ->get();

                $view->with('notifications', $notifications);
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ErrorsManager::class, function () {
            return new ErrorsManager;
        });

        $this->app->singleton(EventDispatcher::class, function () {
            return new EventDispatcher;
        });
    }
}
