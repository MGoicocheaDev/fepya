<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class MgdevModuleLecturesCreateCategoriesStream extends Migration
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
        'slug' => [
            'config' => [
                'slugify' => 'name',
            ],
            'unique' => true,
            'required' => true,
        ],
    ];

}
