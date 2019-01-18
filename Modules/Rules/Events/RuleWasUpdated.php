<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/16/2019
 * Time: 6:00 PM
 */

namespace Modules\Rules\Events;


use Modules\Media\Contracts\StoringMedia;
use Modules\Rules\Entities\Rule;

class RuleWasUpdated implements StoringMedia
{
    /**
     * @var Rule
     */
    private $rule;
    /**
     * @var array
     */
    private $data;

    public function __construct(Rule $rule, array $data)
    {
        $this->rule = $rule;
        $this->data = $data;
    }

    /**
     * Return the entity
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getEntity()
    {
        return $this->rule;
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