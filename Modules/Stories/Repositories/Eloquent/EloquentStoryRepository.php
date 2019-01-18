<?php

namespace Modules\Stories\Repositories\Eloquent;

use Modules\Stories\Events\StoryWasCreated;
use Modules\Stories\Events\StoryWasDeleted;
use Modules\Stories\Events\StoryWasUpdated;
use Modules\Stories\Repositories\StoryRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;

class EloquentStoryRepository extends EloquentBaseRepository implements StoryRepository
{
    public function create($data)
    {
        $story = $this->model->create($data);
        event(new StoryWasCreated($story, $data));
        return $story;
    }

    public function update($story, $data)
    {
        $story->update($data);
        event(new StoryWasUpdated($story, $data));
        return $story;
    }

    public function destroy($story)
    {
        event(new StoryWasDeleted($story));
        return $story->delete();
    }
}
