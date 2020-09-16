<?php

namespace App\Providers;

use App\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (auth()->check()) {
            if (Schema::hasTable('settings')) {
                $setting = Setting::where('user_id',auth()->user()->id)->first();
                config()->set('cart.tax', $setting->tax);
                View::share('setting', $setting);
            }
        }

    }
}
