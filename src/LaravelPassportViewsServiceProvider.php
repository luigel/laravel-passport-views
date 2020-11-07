<?php

namespace Luigel\LaravelPassportViews;

use Illuminate\Support\ServiceProvider;

class LaravelPassportViewsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('passport-views.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../resources/js/components' => resource_path('js/components/passport'),
            ], 'laravel-passport-views');

            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-passport-views'),
            ], 'laravel-passport-views');

            $this->publishes([
                __DIR__.'/../public' => public_path('vendor/laravel-passport-views'),
            ], 'laravel-passport-views');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-passport-views');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-passport-views');

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->app->singleton('laravel-passport-views', function () {
            return new LaravelPassportViews;
        });
    }
}
