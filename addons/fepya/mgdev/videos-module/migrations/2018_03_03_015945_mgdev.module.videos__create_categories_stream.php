<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class MgdevModuleVideosCreateCategoriesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'categories',
         'title_column' => 'name',
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
        'name' => [
            'translatable' => true,
            'required' => true,
        ],
        'description',
        'slug' => [
            'unique' => true,
            'required' => true,
        ],
    ];

}
