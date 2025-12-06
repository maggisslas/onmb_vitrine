<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Category;
use App\Observers\ArticleObserver;
use App\Observers\CategoryObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Category::observe(CategoryObserver::class);
        Article::observe(ArticleObserver::class);
        Paginator::useBootstrap();
    }
}
