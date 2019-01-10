<?php

namespace Modules\Options\Repositories\Cache;

use Modules\Options\Repositories\OptionRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheOptionDecorator extends BaseCacheDecorator implements OptionRepository
{
    public function __construct(OptionRepository $option)
    {
        parent::__construct();
        $this->entityName = 'options.options';
        $this->repository = $option;
    }
}
