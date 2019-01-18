<?php

namespace Modules\Blogs\Repositories\Cache;

use Modules\Blogs\Repositories\BlogRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheBlogDecorator extends BaseCacheDecorator implements BlogRepository
{
    public function __construct(BlogRepository $blog)
    {
        parent::__construct();
        $this->entityName = 'blogs.blogs';
        $this->repository = $blog;
    }
}
