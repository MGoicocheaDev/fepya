<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;
use Mgdev\VideosModule\Category\CategoryModel;

class MgdevModuleVideosCreateVideosFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'title' => 'anomaly.field_type.text',
        'name' => 'anomaly.field_type.text',
        'slug' => [
            'type' => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'name',
                'type' => '_'
            ],
        ],
        'description' => 'anomaly.field_type.textarea',
        'poster' => 'anomaly.field_type.file',
        'video' => 'anomaly.field_type.video',
        'categories' => [
            'type' => 'anomaly.field_type.multiple',
            'config' => [
                'title_name' => 'name',
                'related' => CategoryModel::class,
            ]
        ],
        'enable' => 'anomaly.field_type.boolean',

    ];

}
