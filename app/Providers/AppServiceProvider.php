<?php

namespace App\Providers;

use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Application locale defaults for various components
         *
         * These will be overridden by LocaleMiddleware if the session local is set
         */
        view()->composer('frontend.includes.cart_static', function($view)
        {
            $view->with('total', Cart::total())->with('cart', Cart::content());
        });


        /**
         * setLocale for php. Enables ->formatLocalized() with localized values for dates
         */
        setLocale(LC_TIME, config('app.locale_php'));

        /**
         * setLocale to use Carbon source locales. Enables diffForHumans() localized
         */
        Carbon::setLocale(config('app.locale'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
