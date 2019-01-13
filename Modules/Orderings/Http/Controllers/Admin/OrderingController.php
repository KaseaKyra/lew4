<?php

namespace Modules\Orderings\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Orderings\Entities\Ordering;
use Modules\Orderings\Http\Requests\CreateOrderingRequest;
use Modules\Orderings\Http\Requests\UpdateOrderingRequest;
use Modules\Orderings\Repositories\OrderingRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Stories\Repositories\StoryRepository;

class OrderingController extends AdminBaseController
{
    /**
     * @var OrderingRepository
     */
    private $ordering;
    private $story;

    public function __construct(OrderingRepository $ordering, StoryRepository $story)
    {
        parent::__construct();

        $this->ordering = $ordering;
        $this->story = $story;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $orderings = $this->ordering->all();
        $stories = $this->story->all();

        return view('orderings::admin.orderings.index', compact('orderings', 'stories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $stories = $this->story->all();
        return view('orderings::admin.orderings.create', compact('stories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateOrderingRequest $request
     * @return Response
     */
    public function store(CreateOrderingRequest $request)
    {
        $this->ordering->create($request->all());

        return redirect()->route('admin.orderings.ordering.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('orderings::orderings.title.orderings')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Ordering $ordering
     * @return Response
     */
    public function edit(Ordering $ordering)
    {
        $stories = $this->story->all();
        return view('orderings::admin.orderings.edit', compact('ordering', 'stories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Ordering $ordering
     * @param  UpdateOrderingRequest $request
     * @return Response
     */
    public function update(Ordering $ordering, UpdateOrderingRequest $request)
    {
        $this->ordering->update($ordering, $request->all());

        return redirect()->route('admin.orderings.ordering.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('orderings::orderings.title.orderings')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Ordering $ordering
     * @return Response
     */
    public function destroy(Ordering $ordering)
    {
        $this->ordering->destroy($ordering);

        return redirect()->route('admin.orderings.ordering.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('orderings::orderings.title.orderings')]));
    }
}
