<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/18/2019
 * Time: 9:05 PM
 */

namespace Modules\Blogs\Events;


use Modules\Blogs\Entities\Blog;
use Modules\Media\Contracts\StoringMedia;

class BlogWasUpdated implements StoringMedia
{
    /**
     * @var Blog
     */
    private $blog;
    /**
     * @var array
     */
    private $data;

    public function __construct(Blog $blog, array $data)
    {
        $this->blog = $blog;
        $this->data = $data;
    }

    /**
     * Return the entity
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getEntity()
    {
        return $this->blog;
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