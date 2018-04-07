<?php namespace Mgdev\LessonsModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Mgdev\LessonsModule\Category\Contract\CategoryRepositoryInterface;
use Mgdev\LessonsModule\Category\CategoryRepository;
use Anomaly\Streams\Platform\Model\Lessons\LessonsCategoriesEntryModel;
use Mgdev\LessonsModule\Category\CategoryModel;
use Mgdev\LessonsModule\Teacher\Contract\TeacherRepositoryInterface;
use Mgdev\LessonsModule\Teacher\TeacherRepository;
use Anomaly\Streams\Platform\Model\Lessons\LessonsTeachersEntryModel;
use Mgdev\LessonsModule\Teacher\TeacherModel;
use Mgdev\LessonsModule\Lesson\Contract\LessonRepositoryInterface;
use Mgdev\LessonsModule\Lesson\LessonRepository;
use Anomaly\Streams\Platform\Model\Lessons\LessonsLessonsEntryModel;
use Mgdev\LessonsModule\Lesson\LessonModel;
use Illuminate\Routing\Router;

class LessonsModuleServiceProvider extends AddonServiceProvider
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
        'lessons'           => [
            'as' => 'mgdev.module.lessons::lessons.index',
            'uses' => 'Mgdev\LessonsModule\Http\Controller\FrontEnd\LessonsController@index'
        ],
        'lessons/watch/{slug}' => [
            'as' => 'mgdev.module.lessons::lessons.view',
            'uses' => 'Mgdev\LessonsModule\Http\Controller\FrontEnd\LessonsController@view',
        ],
        'teachers' => [
            'as' => 'mgdev.module.lessons::teachers.index',
            'uses' => 'Mgdev\LessonsModule\Http\Controller\FrontEnd\TeachersController@index',
        ],
        'teachers/watch/{slug}' => [
            'as' => 'mgdev.module.lessons::teachers.view',
            'uses' => 'Mgdev\LessonsModule\Http\Controller\FrontEnd\TeachersController@view',
        ],
        'admin/lessons/categories'           => 'Mgdev\LessonsModule\Http\Controller\Admin\CategoriesController@index',
        'admin/lessons/categories/create'    => 'Mgdev\LessonsModule\Http\Controller\Admin\CategoriesController@create',
        'admin/lessons/categories/edit/{id}' => 'Mgdev\LessonsModule\Http\Controller\Admin\CategoriesController@edit',
        'admin/lessons/teachers'           => 'Mgdev\LessonsModule\Http\Controller\Admin\TeachersController@index',
        'admin/lessons/teachers/create'    => 'Mgdev\LessonsModule\Http\Controller\Admin\TeachersController@create',
        'admin/lessons/teachers/edit/{id}' => 'Mgdev\LessonsModule\Http\Controller\Admin\TeachersController@edit',
        'admin/lessons'           => 'Mgdev\LessonsModule\Http\Controller\Admin\LessonsController@index',
        'admin/lessons/create'    => 'Mgdev\LessonsModule\Http\Controller\Admin\LessonsController@create',
        'admin/lessons/edit/{id}' => 'Mgdev\LessonsModule\Http\Controller\Admin\LessonsController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Mgdev\LessonsModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    Mgdev\LessonsModule\Http\Middleware\ExampleMiddleware::class,
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
        //Mgdev\LessonsModule\Event\ExampleEvent::class => [
        //    Mgdev\LessonsModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Mgdev\LessonsModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        LessonsCategoriesEntryModel::class => CategoryModel::class,
        LessonsTeachersEntryModel::class => TeacherModel::class,
        LessonsLessonsEntryModel::class => LessonModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        CategoryRepositoryInterface::class => CategoryRepository::class,
        TeacherRepositoryInterface::class => TeacherRepository::class,
        LessonRepositoryInterface::class => LessonRepository::class,
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
