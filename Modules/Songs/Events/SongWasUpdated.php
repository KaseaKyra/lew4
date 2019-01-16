<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/16/2019
 * Time: 1:53 PM
 */

namespace Modules\Songs\Events;


use Modules\Media\Contracts\StoringMedia;
use Modules\Songs\Entities\Song;

class SongWasUpdated implements StoringMedia
{
    /**
     * @var Song
     */
    private $song;
    /**
     * @var array
     */
    private $data;

    public function __construct(Song $song, array $data)
    {
        $this->song = $song;
        $this->data = $data;
    }

    /**
     * Return the entity
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getEntity()
    {
        return $this->song;
    }

    /**
     * Return the ALL data sent
     * @return array
     */
    public function getSubmissionData()
    {
        return $this->data;
    }
}