<?php namespace Mgdev\PhotosModule\Album;

use Mgdev\PhotosModule\Album\Contract\AlbumRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class AlbumRepository extends EntryRepository implements AlbumRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var AlbumModel
     */
    protected $model;

    /**
     * Create a new AlbumRepository instance.
     *
     * @param AlbumModel $model
     */
    public function __construct(AlbumModel $model)
    {
        $this->model = $model;
    }

    public function getAllEnables(){
        return $this->model->where('enable',true)->paginate();
    }

      public function findBySlug($slug)
    {
        return $this->model->where('slug',$slug)->first();
    }
}
