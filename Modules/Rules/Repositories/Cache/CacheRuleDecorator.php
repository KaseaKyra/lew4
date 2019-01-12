<?php

namespace Modules\Rules\Repositories\Cache;

use Modules\Rules\Repositories\RuleRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheRuleDecorator extends BaseCacheDecorator implements RuleRepository
{
    public function __construct(RuleRepository $rule)
    {
        parent::__construct();
        $this->entityName = 'rules.rules';
        $this->repository = $rule;
    }
}
