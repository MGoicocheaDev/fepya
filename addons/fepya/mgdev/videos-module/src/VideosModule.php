<?php namespace Mgdev\VideosModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class VideosModule extends Module
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
    protected $icon = 'fa fa-film';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'videos' => [
            'buttons' => [
                'new_video',
            ],
        ],
        'categories' => [
            'buttons' => [
                'new_category',
            ],
        ],
    ];

}
