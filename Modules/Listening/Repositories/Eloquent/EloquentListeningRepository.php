<?php

namespace Modules\Listening\Repositories\Eloquent;

use Modules\Listening\Entities\Listening;
use Modules\Listening\Events\ListeningWasCreated;
use Modules\Listening\Events\ListeningWasDeleted;
use Modules\Listening\Events\ListeningWasUpdated;
use Modules\Listening\Repositories\ListeningRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;

class EloquentListeningRepository extends EloquentBaseRepository implements ListeningRepository
{
    public function create($data)
    {
        $listening = $this->model->create($data);
        event(new ListeningWasCreated($listening, $data));
        return $listening;
    }

    public function update($listening, $data)
    {
        $listening->update($data);
        event(new ListeningWasUpdated($listening, $data));
        return $listening;
    }

    public function destroy($listening)
    {
        event(new ListeningWasDeleted($listening));
        return $listening->delete();
    }

}
