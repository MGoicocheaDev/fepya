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

    public function findBySlug($slug)
    {
        return $this->model->where('slug',$slug)->first();
    }

    public function otherVideosRandom($slug)
    {
        return $this->model->where('enable',true)->where('slug','!=',$slug)->inRandomOrder()->take(3)->get();
    }
}
