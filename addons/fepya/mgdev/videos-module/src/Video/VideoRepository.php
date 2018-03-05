<?php namespace Mgdev\VideosModule\Video;

use Mgdev\VideosModule\Video\Contract\VideoRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class VideoRepository extends EntryRepository implements VideoRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var VideoModel
     */
    protected $model;

    /**
     * Create a new VideoRepository instance.
     *
     * @param VideoModel $model
     */
    public function __construct(VideoModel $model)
    {
        $this->model = $model;
    }
}
