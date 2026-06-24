<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
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
        View::share('setting', Schema::hasTable('settings') ? Setting::first() : null);
        View::share('categories', Schema::hasTable('categories')
            ? (Schema::hasTable('category_specifications') ? Category::with('specifications')->get() : Category::all())
            : collect());
        View::share('allBrands', Schema::hasTable('brands') ? Brand::all() : collect());

    }
}
