<?php namespace Mgdev\BrandsModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class BrandsModule extends Module
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
    protected $icon = 'fa fa-bandcamp';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'brands' => [
            'buttons' => [
                'new_brand',
            ],
        ],
        'categories' => [
            'buttons' => [
                'new_category',
            ],
        ],
    ];

}
