<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;
use Mgdev\LessonsModule\Category\CategoryModel;
use Mgdev\LessonsModule\Teacher\TeacherModel;

class MgdevModuleLessonsCreateLessonsFields extends Migration
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
                'type' => '-'
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
        'datelecture' => 'anomaly.field_type.datetime',
        'place' => 'anomaly.field_type.text',
        'meta_title'       => 'anomaly.field_type.text',
        'meta_description' => 'anomaly.field_type.textarea',
        'meta_keywords'    => 'anomaly.field_type.tags',
        'time_class' => 'anomaly.field_type.integer'

    ];

}
