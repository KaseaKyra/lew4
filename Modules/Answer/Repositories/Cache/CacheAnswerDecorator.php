<?php

namespace Modules\Answer\Repositories\Cache;

use Modules\Answer\Repositories\AnswerRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheAnswerDecorator extends BaseCacheDecorator implements AnswerRepository
{
    public function __construct(AnswerRepository $answer)
    {
        parent::__construct();
        $this->entityName = 'answer.answers';
        $this->repository = $answer;
    }
}
