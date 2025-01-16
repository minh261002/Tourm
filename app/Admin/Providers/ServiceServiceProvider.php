<?php

namespace App\Admin\Providers;

use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    protected $services = [
        'App\Admin\Services\Module\ModuleServiceInterface' => 'App\Admin\Services\Module\ModuleService',
        'App\Admin\Services\Permission\PermissionServiceInterface' => 'App\Admin\Services\Permission\PermissionService',
        'App\Admin\Services\Role\RoleServiceInterface' => 'App\Admin\Services\Role\RoleService',
        'App\Admin\Services\Admin\AdminServiceInterface' => 'App\Admin\Services\Admin\AdminService',
        'App\Admin\Services\Customer\CustomerServiceInterface' => 'App\Admin\Services\Customer\CustomerService',
        'App\Admin\Services\Post\PostCatalogueServiceInterface' => 'App\Admin\Services\Post\PostCatalogueService',
        'App\Admin\Services\Post\PostServiceInterface' => 'App\Admin\Services\Post\PostService',
        'App\Admin\Services\Category\CategoryServiceInterface' => 'App\Admin\Services\Category\CategoryService',
        'App\Admin\Services\Slider\SliderServiceInterface' => 'App\Admin\Services\Slider\SliderService',
        'App\Admin\Services\Slider\SliderItemServiceInterface' => 'App\Admin\Services\Slider\SliderItemService',
        'App\Admin\Services\Destination\DestinationServiceInterface' => 'App\Admin\Services\Destination\DestinationService',
        'App\Admin\Services\Activity\ActivityServiceInterface' => 'App\Admin\Services\Activity\ActivityService',
        'App\Admin\Services\Amenity\AmenityServiceInterface' => 'App\Admin\Services\Amenity\AmenityService',
        'App\Admin\Services\Property\PropertyServiceInterface' => 'App\Admin\Services\Property\PropertyService',
        'App\Admin\Services\User\UserServiceInterface' => 'App\Admin\Services\User\UserService',
    ];
    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->services as $interface => $service) {
            $this->app->bind($interface, $service);
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