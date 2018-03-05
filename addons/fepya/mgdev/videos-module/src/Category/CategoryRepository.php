<?php namespace Mgdev\VideosModule\Category;

use Mgdev\VideosModule\Category\Contract\CategoryRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class CategoryRepository extends EntryRepository implements CategoryRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var CategoryModel
     */
    protected $model;

    /**
     * Create a new CategoryRepository instance.
     *
     * @param CategoryModel $model
     */
    public function __construct(CategoryModel $model)
    {
        $this->model = $model;
    }
}
