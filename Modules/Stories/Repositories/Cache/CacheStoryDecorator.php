<?php

namespace Modules\Stories\Repositories\Cache;

use Modules\Stories\Repositories\StoryRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheStoryDecorator extends BaseCacheDecorator implements StoryRepository
{
    public function __construct(StoryRepository $story)
    {
        parent::__construct();
        $this->entityName = 'stories.stories';
        $this->repository = $story;
    }
}
