<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;
use Mgdev\PhotosModule\Category\CategoryModel;

class MgdevModulePhotosCreatePhotosFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'title' => 'anomaly.field_type.text',
        'name' => 'anomaly.field_type.text',
        'description' => 'anomaly.field_type.textarea',
        'slug' => [
            'type' => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'title',
                'type' => '-'
            ],
        ],
        'categories' => [
            'type' => 'anomaly.field_type.multiple',
            'config' => [
                'title_name' => 'name',
                'related' => CategoryModel::class,
            ]
        ],
        'enable' => [
            "type"   => "anomaly.field_type.boolean",
            "config" => [
                "default_value" => true,
                "on_color"      => "success",
                "off_color"     => "danger",
                "on_text"       => "YES",
                "off_text"      => "NO",
                "label"         => null,
            ]
        ],
        'gallery' => [
            'type' => 'anomaly.field_type.files',
            'config' => [
                'max' => '40',
            ],
        ],
    ];

}
