<?php

namespace Modules\Questions\Repositories\Cache;

use Modules\Questions\Repositories\QuestionRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheQuestionDecorator extends BaseCacheDecorator implements QuestionRepository
{
    public function __construct(QuestionRepository $question)
    {
        parent::__construct();
        $this->entityName = 'questions.questions';
        $this->repository = $question;
    }
}
