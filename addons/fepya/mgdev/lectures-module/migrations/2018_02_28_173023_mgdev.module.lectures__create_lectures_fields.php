<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;
use Mgdev\LecturesModule\Category\CategoryModel;
use Mgdev\LecturesModule\Teacher\TeacherModel;

class MgdevModuleLecturesCreateLecturesFields extends Migration
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
                'slugify' => 'title',
                'type' => '_'
            ],
        ],
        'photo' => 'anomaly.field_type.file',
        'html' => 'anomaly.field_type.wysiwyg',
        'website' => 'anomaly.field_type.url',
        'facebook' => 'anomaly.field_type.url',
        'pinterest' => 'anomaly.field_type.url',
        'twitter' => 'anomaly.field_type.url',
        'google_plus' => 'anomaly.field_type.url',
        'categories' => [
            'type' => 'anomaly.field_type.multiple',
            'config' => [
                'related' => CategoryModel::class,
            ],
        ],
        'teachers' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'title_name' => 'name',
                'related' => TeacherModel::class,
            ],
        ],
        'gallery' => [
            'type' => 'anomaly.field_type.files',
            'config' => [
                'max' => '4',
            ],
        ],
        'enable' => 'anomaly.field_type.boolean',
    ];

}
