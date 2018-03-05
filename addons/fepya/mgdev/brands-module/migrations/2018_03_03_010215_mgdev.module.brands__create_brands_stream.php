<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class MgdevModuleBrandsCreateBrandsStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'brands',
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
        'logo' => [
            'required' => true,
        ],
        'title' => [
            'translatable' => true,
            'required' => true,
        ],
        'slug' => [
            'unique' => true,
            'required' => true,
            'config' => [
                'slugify' => 'title',
            ],
        ],
        'html' => [
            'required' => true,
        ],
        'website' => [
            'required' => false,
        ],
        'facebook' => [
            'required' => false,
        ],
        'twitter' => [
            'required' => false,
        ],
        'google_plus' => [
            'required' => false,
        ]
        ,
        'pinterest' => [
            'required' => false,
        ],
        'categories' => [
            'required' => true,
        ],
    ];

}
