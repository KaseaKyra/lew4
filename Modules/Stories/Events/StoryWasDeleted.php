<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/16/2019
 * Time: 5:41 PM
 */

namespace Modules\Stories\Events;


use Modules\Media\Contracts\DeletingMedia;
use Modules\Stories\Entities\Story;

class StoryWasDeleted implements DeletingMedia
{
    /**
     * @var Story
     */
    private $story;

    public function __construct(Story $story)
    {
        $this->story = $story;
    }

    /**
     * Get the entity ID
     * @return int
     */
    public function getEntityId()
    {
        return $this->story->id;
    }

    /**
     * Get the class name the imageables
     * @return string
     */
    public function getClassName()
    {
        return get_class($this->story);
    }
}