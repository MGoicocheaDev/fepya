<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;
use Mgdev\PhotosModule\Album\AlbumModel;

class MgdevModulePhotosCreatePhotosFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'title' => 'anomaly.field_type.text',
        'description' => 'anomaly.field_type.textarea',
        'slug' => [
            'type' => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'title',
                'type' => '_'
            ],
        ],
        'albums' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
              'title_name' => 'title',
              'related' => AlbumModel::class,
            ],
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
        'poster' => 'anomaly.field_type.file',
    ];

}
