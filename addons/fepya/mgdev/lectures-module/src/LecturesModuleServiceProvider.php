<?php namespace Mgdev\LecturesModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Mgdev\LecturesModule\Teacher\Contract\TeacherRepositoryInterface;
use Mgdev\LecturesModule\Teacher\TeacherRepository;
use Anomaly\Streams\Platform\Model\Lectures\LecturesTeachersEntryModel;
use Mgdev\LecturesModule\Teacher\TeacherModel;
use Mgdev\LecturesModule\Category\Contract\CategoryRepositoryInterface;
use Mgdev\LecturesModule\Category\CategoryRepository;
use Anomaly\Streams\Platform\Model\Lectures\LecturesCategoriesEntryModel;
use Mgdev\LecturesModule\Category\CategoryModel;
use Mgdev\LecturesModule\Lecture\Contract\LectureRepositoryInterface;
use Mgdev\LecturesModule\Lecture\LectureRepository;
use Anomaly\Streams\Platform\Model\Lectures\LecturesLecturesEntryModel;
use Mgdev\LecturesModule\Lecture\LectureModel;
use Illuminate\Routing\Router;

class LecturesModuleServiceProvider extends AddonServiceProvider
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
        'admin/lectures/teachers'           => 'Mgdev\LecturesModule\Http\Controller\Admin\TeachersController@index',
        'admin/lectures/teachers/create'    => 'Mgdev\LecturesModule\Http\Controller\Admin\TeachersController@create',
        'admin/lectures/teachers/edit/{id}' => 'Mgdev\LecturesModule\Http\Controller\Admin\TeachersController@edit',
        'admin/lectures/categories'           => 'Mgdev\LecturesModule\Http\Controller\Admin\CategoriesController@index',
        'admin/lectures/categories/create'    => 'Mgdev\LecturesModule\Http\Controller\Admin\CategoriesController@create',
        'admin/lectures/categories/edit/{id}' => 'Mgdev\LecturesModule\Http\Controller\Admin\CategoriesController@edit',
        'admin/lectures'           => 'Mgdev\LecturesModule\Http\Controller\Admin\LecturesController@index',
        'admin/lectures/create'    => 'Mgdev\LecturesModule\Http\Controller\Admin\LecturesController@create',
        'admin/lectures/edit/{id}' => 'Mgdev\LecturesModule\Http\Controller\Admin\LecturesController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Mgdev\LecturesModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    Mgdev\LecturesModule\Http\Middleware\ExampleMiddleware::class,
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
        //Mgdev\LecturesModule\Event\ExampleEvent::class => [
        //    Mgdev\LecturesModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Mgdev\LecturesModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        LecturesTeachersEntryModel::class => TeacherModel::class,
        LecturesCategoriesEntryModel::class => CategoryModel::class,
        LecturesLecturesEntryModel::class => LectureModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        TeacherRepositoryInterface::class => TeacherRepository::class,
        CategoryRepositoryInterface::class => CategoryRepository::class,
        LectureRepositoryInterface::class => LectureRepository::class,
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
