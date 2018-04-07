<?php namespace Mgdev\LessonsModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class LessonsModule extends Module
{

    /**
     * The navigation display flag.
     *
     * @var bool
     */
    protected $navigation = true;

    /**
     * The addon icon.
     *
     * @var string
     */
    protected $icon = 'fa fa-graduation-cap';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'lessons' => [
            'buttons' => [
                'new_lesson',
            ],
        ],
        'teachers' => [
            'buttons' => [
                'new_teacher',
            ],
        ],
        'categories' => [
            'buttons' => [
                'new_category',
            ],
        ],
    ];

}
