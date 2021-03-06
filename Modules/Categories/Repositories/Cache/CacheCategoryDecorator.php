<?php

namespace Modules\Categories\Repositories\Cache;

use Modules\Categories\Repositories\CategoryRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheCategoryDecorator extends BaseCacheDecorator implements CategoryRepository
{
    public function __construct(CategoryRepository $category)
    {
        parent::__construct();
        $this->entityName = 'categories.categories';
        $this->repository = $category;
    }
}
