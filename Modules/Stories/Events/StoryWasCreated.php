<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/16/2019
 * Time: 5:30 PM
 */

namespace Modules\Stories\Events;


use Modules\Media\Contracts\StoringMedia;
use Modules\Stories\Entities\Story;

class StoryWasCreated implements StoringMedia
{
    /**
     * @var Story
     */
    private $story;
    /**
     * @var array
     */
    private $data;

    public function __construct(Story $story, array $data)
    {
        $this->story = $story;
        $this->data = $data;
    }

    /**
     * Return the entity
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getEntity()
    {
        return $this->story;
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