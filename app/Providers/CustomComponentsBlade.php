<?php

namespace App\Providers;

use App\View\Components\user\childNavLevel1;
use App\View\Components\user\nav;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class CustomComponentsBlade extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Blade::component('user-nav', nav::class);
        // Blade::component('nav-level-1', childNavLevel1::class);
    }
}
