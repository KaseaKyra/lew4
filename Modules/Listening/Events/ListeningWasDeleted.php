<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/15/2019
 * Time: 4:41 PM
 */

namespace Modules\Listening\Events;


use Modules\Listening\Entities\Listening;
use Modules\Media\Contracts\DeletingMedia;

class ListeningWasDeleted implements DeletingMedia
{
    /**
     * @var Listening
     */
    private $listening;

    public function __construct(Listening $listening)
    {
        $this->listening = $listening;
    }

    /**
     * Get the entity ID
     * @return int
     */
    public function getEntityId()
    {
        return $this->listening->id;
    }

    /**
     * Get the class name the imageables
     * @return string
     */
    public function getClassName()
    {
        return get_class($this->listening);
    }
}