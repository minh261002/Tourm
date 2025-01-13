<?php

namespace App\Admin\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        'App\Admin\Repositories\Module\ModuleRepositoryInterface' => 'App\Admin\Repositories\Module\ModuleRepository',
        'App\Admin\Repositories\Permission\PermissionRepositoryInterface' => 'App\Admin\Repositories\Permission\PermissionRepository',
        'App\Admin\Repositories\Role\RoleRepositoryInterface' => 'App\Admin\Repositories\Role\RoleRepository',
        'App\Admin\Repositories\Admin\AdminRepositoryInterface' => 'App\Admin\Repositories\Admin\AdminRepository',
        'App\Admin\Repositories\Customer\CustomerRepositoryInterface' => 'App\Admin\Repositories\Customer\CustomerRepository',
        'App\Admin\Repositories\Post\PostCatalogueRepositoryInterface' => 'App\Admin\Repositories\Post\PostCatalogueRepository',
        'App\Admin\Repositories\Post\PostRepositoryInterface' => 'App\Admin\Repositories\Post\PostRepository',
        'App\Admin\Repositories\Category\CategoryRepositoryInterface' => 'App\Admin\Repositories\Category\CategoryRepository',
        'App\Admin\Repositories\Attribute\AttributeRepositoryInterface' => 'App\Admin\Repositories\Attribute\AttributeRepository',
        'App\Admin\Repositories\AttributeVariation\AttributeVariationRepositoryInterface' => 'App\Admin\Repositories\AttributeVariation\AttributeVariationRepository',
        'App\Admin\Repositories\Product\ProductRepositoryInterface' => 'App\Admin\Repositories\Product\ProductRepository',
        'App\Admin\Repositories\Product\ProductAttributeRepositoryInterface' => 'App\Admin\Repositories\Product\ProductAttributeRepository',
        'App\Admin\Repositories\Product\ProductVariationRepositoryInterface' => 'App\Admin\Repositories\Product\ProductVariationRepository',
        'App\Admin\Repositories\Slider\SliderRepositoryInterface' => 'App\Admin\Repositories\Slider\SliderRepository',
        'App\Admin\Repositories\Slider\SliderItemRepositoryInterface' => 'App\Admin\Repositories\Slider\SliderItemRepository',
        'App\Admin\Repositories\Discount\DiscountRepositoryInterface' => 'App\Admin\Repositories\Discount\DiscountRepository',
        'App\Admin\Repositories\FlashSale\FlashSaleRepositoryInterface' => 'App\Admin\Repositories\FlashSale\FlashSaleRepository',
        'App\Admin\Repositories\FlashSale\FlashSaleProductRepositoryInterface' => 'App\Admin\Repositories\FlashSale\FlashSaleProductRepository',
        'App\Admin\Repositories\Order\OrderRepositoryInterface' => 'App\Admin\Repositories\Order\OrderRepository',
    ];
    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->repositories as $interface => $repository) {
            $this->app->bind($interface, $repository);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}