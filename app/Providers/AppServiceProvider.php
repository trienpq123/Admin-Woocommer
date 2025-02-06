<?php

namespace App\Providers;

use App\Models\AttributeModel;
use App\Models\User;
use App\Observers\UserObserve;
use App\Repositories\Attributes\Attributerepository;
use App\Repositories\Attributes\AttributeRepositoryInterface;
use App\Repositories\Categories\CategoriesRepository;
use App\Repositories\Categories\CategoriesRepositoryInterface;
use App\Repositories\Products\ProductRepository;
use App\Repositories\Products\ProductRepositoryInterface;
use App\Repositories\Profile\ProfileRepositoryInterface;
use App\Repositories\Profile\ProfileRespository;
use App\Repositories\Promotion\PromotionRepositoryInterface;
use App\Repositories\Promotion\PromotionsRepository;
use App\Repositories\Roles\RoleRepositoryInterface;
use App\Repositories\Roles\RoleRespository;
use App\View\Components\user\childNavLevel1;
use App\View\Components\user\nav;
use App\View\Components\user\productItem;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    private $repositories = [
        RoleRepositoryInterface::class => RoleRespository::class,
        AttributeRepositoryInterface::class => Attributerepository::class,
        ProductRepositoryInterface::class => ProductRepository::class,
        CategoriesRepositoryInterface::class => CategoriesRepository::class,
        ProfileRepositoryInterface::class => ProfileRespository::class,
        PromotionRepositoryInterface::class => PromotionsRepository::class
    ];
    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->repositories as $interface => $class) {
            $this->app->bind($interface, $class);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->share('attr', AttributeModel::all());
        // Blade::component('user-nav', nav::class);
        // Blade component
        Blade::component('user-nav', nav::class);
        Blade::component('nav-level-1', childNavLevel1::class);
        Blade::component('product-item', productItem::class);
        require_once app_path('Helpers/helper.php');

        // OBSERVER
        // Tự động thực thi các hành động sau khi xử lý các vấn đề liên quan đến creating, updating, deleting,...
        User::observe(UserObserve::class);
    }
}
