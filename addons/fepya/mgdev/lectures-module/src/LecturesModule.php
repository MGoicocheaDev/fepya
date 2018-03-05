<?php namespace Mgdev\LecturesModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class LecturesModule extends Module
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
        'lectures' => [
            'buttons' => [
                'new_lecture',
            ],
        ],
        'categories' => [
            'buttons' => [
                'new_category',
            ],
        ],
        'teachers' => [
            'buttons' => [
                'new_teacher',
            ],
        ],
    ];

}
