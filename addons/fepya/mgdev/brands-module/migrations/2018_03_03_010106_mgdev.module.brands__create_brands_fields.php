<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;
use Mgdev\BrandsModule\Category\CategoryModel;

class MgdevModuleBrandsCreateBrandsFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'logo'  => 'anomaly.field_type.file',
        'title' => 'anomaly.field_type.text',
        'name' => 'anomaly.field_type.text',
        'slug' => [
            'type' => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'title',
                'type' => '_'
            ],
        ],
        'description' => 'anomaly.field_type.textarea',
        'html' => 'anomaly.field_type.wysiwyg',
        'website' => [
            'type'   => 'anomaly.field_type.url',
            'config' => [
                'default_value' => null,
            ]
        ],
        'facebook' => [
            'type'   => 'anomaly.field_type.url',
            'config' => [
                'default_value' => null,
            ]
        ],
        'twitter' => [
            'type'   => 'anomaly.field_type.url',
            'config' => [
                'default_value' => null,
            ]
        ],
        'google_plus' => [
            'type'   => 'anomaly.field_type.url',
            'config' => [
                'default_value' => null,
            ]
        ],
        'pinterest' => [
            'type'   => 'anomaly.field_type.url',
            'config' => [
                'default_value' => null,
            ]
        ],
        'categories' => [
            'type' => 'anomaly.field_type.multiple',
            'config' => [
                'title_name' => 'name',
                'related' => CategoryModel::class,
            ]
        ],
    ];

}
