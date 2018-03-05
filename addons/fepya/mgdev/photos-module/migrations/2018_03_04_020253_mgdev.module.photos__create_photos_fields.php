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
        'enable' => 'anomaly.field_type.boolean',
    ];

}
