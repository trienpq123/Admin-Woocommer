<?php

namespace App\Providers;

use App\Models\AttributeModel;
use App\Repositories\Attributes\Attributerepository;
use App\Repositories\Attributes\AttributeRepositoryInterface;
use App\Repositories\Roles\RoleRepositoryInterface;
use App\Repositories\Roles\RoleRespository;
use App\Repositories\User\UserRepository;
use App\Repositories\user\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
      $this->app->bind(RoleRepositoryInterface::class, RoleRespository::class);
      $this->app->bind(AttributeRepositoryInterface::class, Attributerepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->share('attr', AttributeModel::all());
     
    }
}
