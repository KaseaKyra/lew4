<?php

namespace Modules\Frontend\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Frontend\Entities\Frontend;
use Modules\Frontend\Http\Requests\CreateFrontendRequest;
use Modules\Frontend\Http\Requests\UpdateFrontendRequest;
use Modules\Frontend\Repositories\FrontendRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class FrontendController extends AdminBaseController
{
    /**
     * @var FrontendRepository
     */
    private $frontend;

    public function __construct(FrontendRepository $frontend)
    {
        parent::__construct();

        $this->frontend = $frontend;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$frontends = $this->frontend->all();

        return view('frontend::admin.frontends.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('frontend::admin.frontends.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateFrontendRequest $request
     * @return Response
     */
    public function store(CreateFrontendRequest $request)
    {
        $this->frontend->create($request->all());

        return redirect()->route('admin.frontend.frontend.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('frontend::frontends.title.frontends')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Frontend $frontend
     * @return Response
     */
    public function edit(Frontend $frontend)
    {
        return view('frontend::admin.frontends.edit', compact('frontend'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Frontend $frontend
     * @param  UpdateFrontendRequest $request
     * @return Response
     */
    public function update(Frontend $frontend, UpdateFrontendRequest $request)
    {
        $this->frontend->update($frontend, $request->all());

        return redirect()->route('admin.frontend.frontend.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('frontend::frontends.title.frontends')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Frontend $frontend
     * @return Response
     */
    public function destroy(Frontend $frontend)
    {
        $this->frontend->destroy($frontend);

        return redirect()->route('admin.frontend.frontend.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('frontend::frontends.title.frontends')]));
    }
}
