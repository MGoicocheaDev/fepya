<?php namespace Mgdev\BrandsModule\Category\Contract;

use Anomaly\Streams\Platform\Entry\Contract\EntryRepositoryInterface;

interface CategoryRepositoryInterface extends EntryRepositoryInterface
{

    public function getAll();
}
