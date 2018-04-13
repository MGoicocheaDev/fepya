<?php namespace Mgdev\VideosModule\Video\Contract;

use Anomaly\Streams\Platform\Entry\Contract\EntryRepositoryInterface;

interface VideoRepositoryInterface extends EntryRepositoryInterface
{

    public function findBySlug($slug);
    public function otherVideosRandom($slug);
}
