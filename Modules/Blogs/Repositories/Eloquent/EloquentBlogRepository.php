<?php

namespace Modules\Blogs\Repositories\Eloquent;

use Modules\Blogs\Events\BlogWasCreated;
use Modules\Blogs\Events\BlogWasDeleted;
use Modules\Blogs\Events\BlogWasUpdated;
use Modules\Blogs\Repositories\BlogRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;

class EloquentBlogRepository extends EloquentBaseRepository implements BlogRepository
{
    public function create($data)
    {
        $blog = $this->model->create($data);
        event(new BlogWasCreated($blog, $data));
        return $blog;
    }

    public function update($blog, $data)
    {
        $blog->update($data);
        event(new BlogWasUpdated($blog, $data));
        return $blog;
    }

    public function destroy($blog)
    {
        event(new BlogWasDeleted($blog));
        return $blog->delete();
    }
}
