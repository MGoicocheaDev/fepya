<?php namespace Mgdev\BrandsModule\Brand;

use Mgdev\BrandsModule\Brand\Contract\BrandRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class BrandRepository extends EntryRepository implements BrandRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var BrandModel
     */
    protected $model;

    /**
     * Create a new BrandRepository instance.
     *
     * @param BrandModel $model
     */
    public function __construct(BrandModel $model)
    {
        $this->model = $model;
    }

    public function findBySlug($slug)
    {
        return $this->model->where('slug',$slug)->first();
    }
}
