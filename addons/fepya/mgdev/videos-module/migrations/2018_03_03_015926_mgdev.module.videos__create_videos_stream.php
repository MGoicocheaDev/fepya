<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class MgdevModuleVideosCreateVideosStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'videos',
         'title_column' => 'title',
         'translatable' => true,
         'trashable' => false,
         'searchable' => false,
         'sortable' => false,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'poster' => [
            'required' => true,
        ],
        'title' => [
            'translatable' => true,
            'required' => true,
        ],
        'slug' => [
            'config' => [
                'slugify' => 'title',
            ],
            'unique' => true,
            'required' => true,
        ],
        'description',
        'video' => [
            'required' => true,
        ],
        'categories' => [
            'required' => true,
        ],
        'enable',

    ];

}
