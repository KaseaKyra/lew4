<?php

namespace Modules\Listening\Repositories\Cache;

use Modules\Listening\Repositories\ListeningRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheListeningDecorator extends BaseCacheDecorator implements ListeningRepository
{
    public function __construct(ListeningRepository $listening)
    {
        parent::__construct();
        $this->entityName = 'listening.listenings';
        $this->repository = $listening;
    }
}
