<?php

namespace Modules\Games\Repositories\Cache;

use Modules\Games\Repositories\GameRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheGameDecorator extends BaseCacheDecorator implements GameRepository
{
    public function __construct(GameRepository $game)
    {
        parent::__construct();
        $this->entityName = 'games.games';
        $this->repository = $game;
    }
}
