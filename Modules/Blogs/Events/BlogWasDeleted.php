<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/18/2019
 * Time: 9:02 PM
 */

namespace Modules\Blogs\Events;


use Modules\Blogs\Entities\Blog;
use Modules\Media\Contracts\DeletingMedia;

class BlogWasDeleted implements DeletingMedia
{
    /**
     * @var Blog
     */
    private $blog;

    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    /**
     * Get the entity ID
     * @return int
     */
    public function getEntityId()
    {
        return $this->blog->id;
    }

    /**
     * Get the class name the imageables
     * @return string
     */
    public function getClassName()
    {
        return get_class($this->blog);
    }
}