<?php

namespace Modules\Songs\Repositories\Cache;

use Modules\Songs\Repositories\SongRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheSongDecorator extends BaseCacheDecorator implements SongRepository
{
    public function __construct(SongRepository $song)
    {
        parent::__construct();
        $this->entityName = 'songs.songs';
        $this->repository = $song;
    }
}
