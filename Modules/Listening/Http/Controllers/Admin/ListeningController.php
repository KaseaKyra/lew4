<?php

namespace Modules\Listening\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Listening\Entities\Listening;
use Modules\Listening\Http\Requests\CreateListeningRequest;
use Modules\Listening\Http\Requests\UpdateListeningRequest;
use Modules\Listening\Repositories\ListeningRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Media\Repositories\FileRepository;

class ListeningController extends AdminBaseController
{
    /**
     * @var ListeningRepository
     */
    private $listening;

    public function __construct(ListeningRepository $listening)
    {
        parent::__construct();

        $this->listening = $listening;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $listenings = $this->listening->all();

        return view('listening::admin.listenings.index', compact('listenings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('listening::admin.listenings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateListeningRequest $request
     * @return Response
     */
    public function store(CreateListeningRequest $request)
    {
        //dd($request->all());
        $this->listening->create($request->all());

        return redirect()->route('admin.listening.listening.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('listening::listenings.title.listenings')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Listening $listening
     * @return Response
     */
    public function edit(Listening $listening, FileRepository $file)
    {
        $featured_image = $file->findFileByZoneForEntity('featured_image', $listening);
        $gallery = $file->findMultipleFilesByZoneForEntity('gallery', $listening);

        return view('listening::admin.listenings.edit', compact('listening', 'featured_image', 'gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Listening $listening
     * @param  UpdateListeningRequest $request
     * @return Response
     */
    public function update(Listening $listening, UpdateListeningRequest $request)
    {
        $this->listening->update($listening, $request->all());

        return redirect()->route('admin.listening.listening.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('listening::listenings.title.listenings')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Listening $listening
     * @return Response
     */
    public function destroy(Listening $listening)
    {
        $this->listening->destroy($listening);

        return redirect()->route('admin.listening.listening.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('listening::listenings.title.listenings')]));
    }
}
