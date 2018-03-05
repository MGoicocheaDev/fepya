<?php namespace Mgdev\BrandsModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Mgdev\BrandsModule\Category\Contract\CategoryRepositoryInterface;
use Mgdev\BrandsModule\Category\CategoryRepository;
use Anomaly\Streams\Platform\Model\Brands\BrandsCategoriesEntryModel;
use Mgdev\BrandsModule\Category\CategoryModel;
use Mgdev\BrandsModule\Brand\Contract\BrandRepositoryInterface;
use Mgdev\BrandsModule\Brand\BrandRepository;
use Anomaly\Streams\Platform\Model\Brands\BrandsBrandsEntryModel;
use Mgdev\BrandsModule\Brand\BrandModel;
use Illuminate\Routing\Router;

class BrandsModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'brands'           => [
            'as' => 'mgdev.module.brands::brands.index',
            'uses' => 'Mgdev\BrandsModule\Http\Controller\FrontEnd\BrandController@index'
        ],
        'brands/watch/{slug}' =>[
            'as' => 'mgdev.module.brands::brands.view',
            'uses' => 'Mgdev\BrandsModule\Http\Controller\FrontEnd\BrandController@view',
        ],
        'admin/brands'           => 'Mgdev\BrandsModule\Http\Controller\Admin\BrandsController@index',
        'admin/brands/create'    => 'Mgdev\BrandsModule\Http\Controller\Admin\BrandsController@create',
        'admin/brands/edit/{id}' => 'Mgdev\BrandsModule\Http\Controller\Admin\BrandsController@edit',
        'admin/brands/categories'           => 'Mgdev\BrandsModule\Http\Controller\Admin\CategoriesController@index',
        'admin/brands/categories/create'    => 'Mgdev\BrandsModule\Http\Controller\Admin\CategoriesController@create',
        'admin/brands/categories/edit/{id}' => 'Mgdev\BrandsModule\Http\Controller\Admin\CategoriesController@edit',

    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Mgdev\BrandsModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    Mgdev\BrandsModule\Http\Middleware\ExampleMiddleware::class,
        //],
    ];

    /**
     * Addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //Mgdev\BrandsModule\Event\ExampleEvent::class => [
        //    Mgdev\BrandsModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Mgdev\BrandsModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        BrandsCategoriesEntryModel::class => CategoryModel::class,
        BrandsBrandsEntryModel::class => BrandModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        CategoryRepositoryInterface::class => CategoryRepository::class,
        BrandRepositoryInterface::class => BrandRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}
