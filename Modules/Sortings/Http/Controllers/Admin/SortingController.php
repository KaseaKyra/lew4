<?php

namespace Modules\Sortings\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Rules\Repositories\RuleRepository;
use Modules\Sortings\Entities\Sorting;
use Modules\Sortings\Http\Requests\CreateSortingRequest;
use Modules\Sortings\Http\Requests\UpdateSortingRequest;
use Modules\Sortings\Repositories\SortingRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class SortingController extends AdminBaseController
{
    /**
     * @var SortingRepository
     */
    private $sorting;
    private $rule;

    public function __construct(SortingRepository $sorting, RuleRepository $rule)
    {
        parent::__construct();

        $this->sorting = $sorting;
        $this->rule = $rule;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $sortings = $this->sorting->all();

        return view('sortings::admin.sortings.index', compact('sortings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $rules = $this->rule->all();
        return view('sortings::admin.sortings.create', compact('rules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateSortingRequest $request
     * @return Response
     */
    public function store(CreateSortingRequest $request)
    {
        $this->sorting->create($request->all());

        return redirect()->route('admin.sortings.sorting.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('sortings::sortings.title.sortings')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Sorting $sorting
     * @return Response
     */
    public function edit(Sorting $sorting)
    {
        $rules = $this->rule->all();
        return view('sortings::admin.sortings.edit', compact('sorting', 'rules'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Sorting $sorting
     * @param  UpdateSortingRequest $request
     * @return Response
     */
    public function update(Sorting $sorting, UpdateSortingRequest $request)
    {
        $this->sorting->update($sorting, $request->all());

        return redirect()->route('admin.sortings.sorting.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('sortings::sortings.title.sortings')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Sorting $sorting
     * @return Response
     */
    public function destroy(Sorting $sorting)
    {
        $this->sorting->destroy($sorting);

        return redirect()->route('admin.sortings.sorting.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('sortings::sortings.title.sortings')]));
    }
}
