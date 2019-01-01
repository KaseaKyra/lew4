<?php

namespace Modules\Stories\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Stories\Entities\Story;
use Modules\Stories\Http\Requests\CreateStoryRequest;
use Modules\Stories\Http\Requests\UpdateStoryRequest;
use Modules\Stories\Repositories\StoryRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class StoryController extends AdminBaseController
{
    /**
     * @var StoryRepository
     */
    private $story;

    public function __construct(StoryRepository $story)
    {
        parent::__construct();

        $this->story = $story;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $stories = $this->story->all();

        return view('stories::admin.stories.index', compact('stories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('stories::admin.stories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateStoryRequest $request
     * @return Response
     */
    public function store(CreateStoryRequest $request)
    {
        $this->story->create($request->all());

        return redirect()->route('admin.stories.story.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('stories::stories.title.stories')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Story $story
     * @return Response
     */
    public function edit(Story $story)
    {
        return view('stories::admin.stories.edit', compact('story'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Story $story
     * @param  UpdateStoryRequest $request
     * @return Response
     */
    public function update(Story $story, UpdateStoryRequest $request)
    {
        $this->story->update($story, $request->all());

        return redirect()->route('admin.stories.story.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('stories::stories.title.stories')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Story $story
     * @return Response
     */
    public function destroy(Story $story)
    {
        $this->story->destroy($story);

        return redirect()->route('admin.stories.story.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('stories::stories.title.stories')]));
    }
}
