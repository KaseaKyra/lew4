<?php

namespace Modules\Frontend\Repositories\Cache;

use Modules\Frontend\Repositories\FrontendRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheFrontendDecorator extends BaseCacheDecorator implements FrontendRepository
{
    public function __construct(FrontendRepository $frontend)
    {
        parent::__construct();
        $this->entityName = 'frontend.frontends';
        $this->repository = $frontend;
    }
}
