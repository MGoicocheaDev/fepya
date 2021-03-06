<?php namespace Mgdev\PhotosModule\Album\Contract;

use Anomaly\Streams\Platform\Entry\Contract\EntryRepositoryInterface;

interface AlbumRepositoryInterface extends EntryRepositoryInterface
{
	public function getAllEnables();

	public function findBySlug($slug);
}
