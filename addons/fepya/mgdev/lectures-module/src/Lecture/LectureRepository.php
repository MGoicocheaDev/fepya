<?php namespace Mgdev\LecturesModule\Lecture;

use Mgdev\LecturesModule\Lecture\Contract\LectureRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class LectureRepository extends EntryRepository implements LectureRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var LectureModel
     */
    protected $model;

    /**
     * Create a new LectureRepository instance.
     *
     * @param LectureModel $model
     */
    public function __construct(LectureModel $model)
    {
        $this->model = $model;
    }
}
