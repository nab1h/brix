<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }


    public function boot(): void
    {
        View::share('setting', Setting::first());
        View::share('categories', Category::all());
        View::share('allBrands', Brand::all());

    }
}
