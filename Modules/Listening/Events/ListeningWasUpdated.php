<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/15/2019
 * Time: 4:39 PM
 */

namespace Modules\Listening\Events;


use Modules\Listening\Entities\Listening;
use Modules\Media\Contracts\StoringMedia;

class ListeningWasUpdated implements StoringMedia
{
    /**
     * @var Listening
     */
    private $listening;
    /**
     * @var array
     */
    private $data;

    public function __construct(Listening $listening, array $data)
    {
        $this->listening = $listening;
        $this->data = $data;
    }

    /**
     * Return the entity
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getEntity()
    {
        return $this->listening;
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