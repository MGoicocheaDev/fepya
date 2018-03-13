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
        'place' => [
            'translatable' => true,
            'required' => true,
        ],
        'datelecture' => 
        [
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
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

}
