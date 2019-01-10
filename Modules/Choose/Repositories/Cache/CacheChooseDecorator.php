<?php

namespace Modules\Choose\Repositories\Cache;

use Modules\Choose\Repositories\ChooseRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheChooseDecorator extends BaseCacheDecorator implements ChooseRepository
{
    public function __construct(ChooseRepository $choose)
    {
        parent::__construct();
        $this->entityName = 'choose.chooses';
        $this->repository = $choose;
    }
}
