<?php namespace Mgdev\LessonsModule\Teacher;

use Mgdev\LessonsModule\Teacher\Contract\TeacherRepositoryInterface;
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

    public function findBySlug($slug)
    {
        return $this->model->where('slug',$slug)->first();
    }

    public function getAllTeachers(){
        return $this->model->where('enable',true)->get();
    }
}
