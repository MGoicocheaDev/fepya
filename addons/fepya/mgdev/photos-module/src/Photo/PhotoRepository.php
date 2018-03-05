<?php namespace Mgdev\PhotosModule\Photo;

use Mgdev\PhotosModule\Photo\Contract\PhotoRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class PhotoRepository extends EntryRepository implements PhotoRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var PhotoModel
     */
    protected $model;

    /**
     * Create a new PhotoRepository instance.
     *
     * @param PhotoModel $model
     */
    public function __construct(PhotoModel $model)
    {
        $this->model = $model;
    }
}
