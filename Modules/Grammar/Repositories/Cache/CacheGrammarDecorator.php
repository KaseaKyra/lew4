<?php

namespace Modules\Grammar\Repositories\Cache;

use Modules\Grammar\Repositories\GrammarRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheGrammarDecorator extends BaseCacheDecorator implements GrammarRepository
{
    public function __construct(GrammarRepository $grammar)
    {
        parent::__construct();
        $this->entityName = 'grammar.grammars';
        $this->repository = $grammar;
    }
}
