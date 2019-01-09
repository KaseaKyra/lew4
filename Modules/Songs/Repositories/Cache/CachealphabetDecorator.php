<?php

namespace Modules\Songs\Repositories\Cache;

use Modules\Songs\Repositories\alphabetRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CachealphabetDecorator extends BaseCacheDecorator implements alphabetRepository
{
    public function __construct(alphabetRepository $alphabet)
    {
        parent::__construct();
        $this->entityName = 'songs.alphabets';
        $this->repository = $alphabet;
    }
}
