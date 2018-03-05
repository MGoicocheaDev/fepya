<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class MgdevModuleLecturesCreateTeachersStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'teachers',
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
        'title' =>[
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
        'photo' => [
            'required' => true,
        ],
        'html' => [
            'required' => true,
        ],
        'website',
        'facebook',
        'pinterest',
        'twitter',
        'google_plus',
        'gallery',
        'enable',
    ];

}
