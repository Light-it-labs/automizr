<?php

namespace Lightit\Automizr\Providers;

use Illuminate\Support\ServiceProvider;
use Lightit\Automizr\Automizr;
use Lightit\Automizr\Contracts\AutomizrContract;

class AutomizrServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AutomizrContract::class, function($app) {
            return new Automizr();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
