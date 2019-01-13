<?php

namespace Modules\Results\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Results\Entities\Result;
use Modules\Results\Http\Requests\CreateResultRequest;
use Modules\Results\Http\Requests\UpdateResultRequest;
use Modules\Results\Repositories\ResultRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Stories\Repositories\StoryRepository;

class ResultController extends AdminBaseController
{
    /**
     * @var ResultRepository
     */
    private $result;
    private $story;

    public function __construct(ResultRepository $result, StoryRepository $story)
    {
        parent::__construct();

        $this->result = $result;
        $this->story = $story;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $results = $this->result->all();
        $stories = $this->story->all();

        return view('results::admin.results.index', compact('results', 'stories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $stories = $this->story->all();
        return view('results::admin.results.create', compact('stories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateResultRequest $request
     * @return Response
     */
    public function store(CreateResultRequest $request)
    {
        $this->result->create($request->all());

        return redirect()->route('admin.results.result.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('results::results.title.results')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Result $result
     * @return Response
     */
    public function edit(Result $result)
    {
        $stories = $this->story->all();
        return view('results::admin.results.edit', compact('result', 'stories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Result $result
     * @param  UpdateResultRequest $request
     * @return Response
     */
    public function update(Result $result, UpdateResultRequest $request)
    {
        $this->result->update($result, $request->all());

        return redirect()->route('admin.results.result.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('results::results.title.results')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Result $result
     * @return Response
     */
    public function destroy(Result $result)
    {
        $this->result->destroy($result);

        return redirect()->route('admin.results.result.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('results::results.title.results')]));
    }
}
