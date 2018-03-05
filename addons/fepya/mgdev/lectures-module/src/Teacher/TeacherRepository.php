<?php namespace Mgdev\LecturesModule\Teacher;

use Mgdev\LecturesModule\Teacher\Contract\TeacherRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class TeacherRepository extends EntryRepository implements TeacherRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var TeacherModel
     */
    protected $model;

    /**
     * Create a new TeacherRepository instance.
     *
     * @param TeacherModel $model
     */
    public function __construct(TeacherModel $model)
    {
        $this->model = $model;
    }
}
