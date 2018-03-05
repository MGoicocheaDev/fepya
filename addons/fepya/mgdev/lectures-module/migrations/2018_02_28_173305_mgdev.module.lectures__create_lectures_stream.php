<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class MgdevModuleLecturesCreateLecturesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'lectures',
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
        'photo' => [
            'required' => true,
        ],
        'html' => [
            'required' => true,
        ],
        'categories'=> [
            'required' => true,
        ],
        'teachers' => [
            'required' => true
        ],
        'gallery',
        'enable',
    ];

}
