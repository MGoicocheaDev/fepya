<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class MgdevModulePhotosCreatePhotosStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'photos',
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
        'title' => [
            'translatable' => true,
            'required' => true,
        ],
        'slug' => [
            'unique' => true,
            'required' => true,
        ],
        'description' => [
            'translatable' => true,
            'required' => true,
        ],
        'enable',
        'albums' => [
            'required' => true,
        ],
    ];

}
