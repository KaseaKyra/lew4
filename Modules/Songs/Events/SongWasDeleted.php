<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/16/2019
 * Time: 1:23 PM
 */

namespace Modules\Songs\Events;


use Modules\Media\Contracts\DeletingMedia;
use Modules\Songs\Entities\Song;

class SongWasDeleted implements DeletingMedia
{
    /**
     * @var Song
     */
    private $song;

    public function __construct(Song $song)
    {
        $this->song = $song;
    }

    /**
     * Get the entity ID
     * @return int
     */
    public function getEntityId()
    {
        return $this->song->id;
    }

    /**
     * Get the class name the imageables
     * @return string
     */
    public function getClassName()
    {
        return get_class($this->song);
    }
}