<?php namespace Mgdev\PhotosModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class PhotosModule extends Module
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
    protected $icon = 'fa fa-camera';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'photos' => [
            'buttons' => [
                'new_photo',
            ],
        ],
        'albums' => [
            'buttons' => [
                'new_album',
            ],
        ],
    ];

}
