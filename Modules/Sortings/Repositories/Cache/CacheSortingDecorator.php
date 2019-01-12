<?php

namespace Modules\Sortings\Repositories\Cache;

use Modules\Sortings\Repositories\SortingRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheSortingDecorator extends BaseCacheDecorator implements SortingRepository
{
    public function __construct(SortingRepository $sorting)
    {
        parent::__construct();
        $this->entityName = 'sortings.sortings';
        $this->repository = $sorting;
    }
}
