<?php

namespace App\Providers;

use App\Models\Tag;
use App\Models\Cart;
use App\Models\User;
use App\Models\Article;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        $this->configureRateLimiting();

        Route::bind('product', function ($product) {
            return Product::where('identifier', $product)->orWhere('name', $product)->firstOrFail();
        });

        Route::bind('user', function ($user) {
            return User::where('identifier', $user)->orWhere('name', $user)->firstOrFail();
        });
        Route::bind('article', function ($article) {
            return Article::where('slug', $article)->orWhere('title', $article)->firstOrFail();
        });

        Route::bind('category', function ($category) {
            return Category::where('slug', $category)->orWhere('name', $category)->firstOrFail();
        });

        Route::bind('tag', function ($tag) {
            return Tag::where('name', $tag)->orWhere('slug', $tag)->firstOrFail();
        });

        Route::bind('cart', function ($cart) {
            return Cart::where('product_id', $cart)->firstOrFail();
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     */
    protected function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
