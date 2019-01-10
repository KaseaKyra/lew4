<?php

namespace Modules\Songquestions\Repositories\Cache;

use Modules\Songquestions\Repositories\QuestionRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheQuestionDecorator extends BaseCacheDecorator implements QuestionRepository
{
    public function __construct(QuestionRepository $question)
    {
        parent::__construct();
        $this->entityName = 'songquestions.questions';
        $this->repository = $question;
    }
}
