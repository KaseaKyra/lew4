<?php

namespace Modules\Orderings\Repositories\Cache;

use Modules\Orderings\Repositories\OrderingRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheOrderingDecorator extends BaseCacheDecorator implements OrderingRepository
{
    public function __construct(OrderingRepository $ordering)
    {
        parent::__construct();
        $this->entityName = 'orderings.orderings';
        $this->repository = $ordering;
    }
}
