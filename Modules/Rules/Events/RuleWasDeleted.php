<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/16/2019
 * Time: 6:02 PM
 */

namespace Modules\Rules\Events;


use Modules\Media\Contracts\DeletingMedia;
use Modules\Rules\Entities\Rule;

class RuleWasDeleted implements DeletingMedia
{
    /**
     * @var Rule
     */
    private $rule;

    public function __construct(Rule $rule)
    {
        $this->rule = $rule;
    }

    /**
     * Get the entity ID
     * @return int
     */
    public function getEntityId()
    {
        return $this->rule->id;
    }

    /**
     * Get the class name the imageables
     * @return string
     */
    public function getClassName()
    {
        return get_class($this->rule);
    }
}