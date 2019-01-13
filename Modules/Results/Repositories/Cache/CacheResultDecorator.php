<?php

namespace Modules\Results\Repositories\Cache;

use Modules\Results\Repositories\ResultRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheResultDecorator extends BaseCacheDecorator implements ResultRepository
{
    public function __construct(ResultRepository $result)
    {
        parent::__construct();
        $this->entityName = 'results.results';
        $this->repository = $result;
    }
}
