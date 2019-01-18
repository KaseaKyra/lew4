<?php

namespace Modules\Blogs\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Blogs\Entities\Blog;
use Modules\Blogs\Http\Requests\CreateBlogRequest;
use Modules\Blogs\Http\Requests\UpdateBlogRequest;
use Modules\Blogs\Repositories\BlogRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class BlogController extends AdminBaseController
{
    /**
     * @var BlogRepository
     */
    private $blog;

    public function __construct(BlogRepository $blog)
    {
        parent::__construct();

        $this->blog = $blog;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $blogs = $this->blog->all();

        return view('blogs::admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('blogs::admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateBlogRequest $request
     * @return Response
     */
    public function store(CreateBlogRequest $request)
    {
        $this->blog->create($request->all());

        return redirect()->route('admin.blogs.blog.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('blogs::blogs.title.blogs')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Blog $blog
     * @return Response
     */
    public function edit(Blog $blog)
    {
        return view('blogs::admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Blog $blog
     * @param  UpdateBlogRequest $request
     * @return Response
     */
    public function update(Blog $blog, UpdateBlogRequest $request)
    {
        $this->blog->update($blog, $request->all());

        return redirect()->route('admin.blogs.blog.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('blogs::blogs.title.blogs')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Blog $blog
     * @return Response
     */
    public function destroy(Blog $blog)
    {
        $this->blog->destroy($blog);

        return redirect()->route('admin.blogs.blog.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('blogs::blogs.title.blogs')]));
    }
}
