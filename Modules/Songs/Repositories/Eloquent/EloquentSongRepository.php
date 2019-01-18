<?php

namespace Modules\Songs\Repositories\Eloquent;

use Modules\Songs\Events\SongWasCreated;
use Modules\Songs\Events\SongWasDeleted;
use Modules\Songs\Events\SongWasUpdated;
use Modules\Songs\Repositories\SongRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;

class EloquentSongRepository extends EloquentBaseRepository implements SongRepository
{
    public function create($data)
    {
        $song = $this->model->create($data);
        event(new SongWasCreated($song, $data));
        return $song;
    }

    public function update($song, $data)
    {
        $song->update($data);
        event(new SongWasUpdated($song, $data));
        return $song;
    }

    public function destroy($song)
    {
        event(new SongWasDeleted($song));
        return $song->delete();
    }
}
