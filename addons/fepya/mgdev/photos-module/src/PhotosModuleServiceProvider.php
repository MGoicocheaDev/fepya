<?php namespace Mgdev\PhotosModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Mgdev\PhotosModule\Album\Contract\AlbumRepositoryInterface;
use Mgdev\PhotosModule\Album\AlbumRepository;
use Anomaly\Streams\Platform\Model\Photos\PhotosAlbumsEntryModel;
use Mgdev\PhotosModule\Album\AlbumModel;
use Mgdev\PhotosModule\Photo\Contract\PhotoRepositoryInterface;
use Mgdev\PhotosModule\Photo\PhotoRepository;
use Anomaly\Streams\Platform\Model\Photos\PhotosPhotosEntryModel;
use Mgdev\PhotosModule\Photo\PhotoModel;
use Illuminate\Routing\Router;

class PhotosModuleServiceProvider extends AddonServiceProvider
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
        'admin/photos/albums'           => 'Mgdev\PhotosModule\Http\Controller\Admin\AlbumsController@index',
        'admin/photos/albums/create'    => 'Mgdev\PhotosModule\Http\Controller\Admin\AlbumsController@create',
        'admin/photos/albums/edit/{id}' => 'Mgdev\PhotosModule\Http\Controller\Admin\AlbumsController@edit',
        'admin/photos'           => 'Mgdev\PhotosModule\Http\Controller\Admin\PhotosController@index',
        'admin/photos/create'    => 'Mgdev\PhotosModule\Http\Controller\Admin\PhotosController@create',
        'admin/photos/edit/{id}' => 'Mgdev\PhotosModule\Http\Controller\Admin\PhotosController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Mgdev\PhotosModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    Mgdev\PhotosModule\Http\Middleware\ExampleMiddleware::class,
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
        //Mgdev\PhotosModule\Event\ExampleEvent::class => [
        //    Mgdev\PhotosModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Mgdev\PhotosModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        PhotosAlbumsEntryModel::class => AlbumModel::class,
        PhotosPhotosEntryModel::class => PhotoModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        AlbumRepositoryInterface::class => AlbumRepository::class,
        PhotoRepositoryInterface::class => PhotoRepository::class,
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
