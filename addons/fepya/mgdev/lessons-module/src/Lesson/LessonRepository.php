<?php namespace Mgdev\LessonsModule\Lesson;

use Mgdev\LessonsModule\Lesson\Contract\LessonRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class LessonRepository extends EntryRepository implements LessonRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var LessonModel
     */
    protected $model;

    /**
     * Create a new LessonRepository instance.
     *
     * @param LessonModel $model
     */
    public function __construct(LessonModel $model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getAllAvailable()
    {

        return $this->model->get('title','slug');
    }

    public function findBySlug($slug)
    {
        return $this->model->where('slug',$slug)->first();
    }

    public function otherClassRandom($slug)
    {
        return $this->model->where('enable',true)->where('slug','!=',$slug)->inRandomOrder()->take(3)->get();
    }
}
