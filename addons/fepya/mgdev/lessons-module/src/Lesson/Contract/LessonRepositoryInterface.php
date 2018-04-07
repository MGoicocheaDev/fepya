<?php namespace Mgdev\LessonsModule\Lesson\Contract;

use Anomaly\Streams\Platform\Entry\Contract\EntryRepositoryInterface;

interface LessonRepositoryInterface extends EntryRepositoryInterface
{
    public function getAllAvailable();
}
