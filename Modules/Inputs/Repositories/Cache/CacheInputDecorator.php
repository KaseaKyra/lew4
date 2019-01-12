<?php

namespace Modules\Inputs\Repositories\Cache;

use Modules\Inputs\Repositories\InputRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheInputDecorator extends BaseCacheDecorator implements InputRepository
{
    public function __construct(InputRepository $input)
    {
        parent::__construct();
        $this->entityName = 'inputs.inputs';
        $this->repository = $input;
    }
}
