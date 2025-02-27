<?php

namespace App\Providers;

use App\Repositories\Attributes\AttributeRepositoryInterface;
use App\Repositories\Attributes\Attributerepository;
use App\Repositories\User\UserRespository;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->singleton(UserRepositoryInterface::class,UserRespository::class);
        $this->app->singleton(AttributeRepositoryInterface::class,Attributerepository::class);
       

    }
}
