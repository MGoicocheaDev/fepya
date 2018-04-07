<?php namespace Mgdev\LessonsModule\Teacher\Contract;

use Anomaly\Streams\Platform\Entry\Contract\EntryRepositoryInterface;

interface TeacherRepositoryInterface extends EntryRepositoryInterface
{

    public function findBySlug($slug);
}
