<?php

namespace Modules\Songs\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Songs\Entities\alphabet;
use Modules\Songs\Http\Requests\CreatealphabetRequest;
use Modules\Songs\Http\Requests\UpdatealphabetRequest;
use Modules\Songs\Repositories\alphabetRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class alphabetController extends AdminBaseController
{
    /**
     * @var alphabetRepository
     */
    private $alphabet;

    public function __construct(alphabetRepository $alphabet)
    {
        parent::__construct();

        $this->alphabet = $alphabet;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$alphabets = $this->alphabet->all();

        return view('songs::admin.alphabets.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('songs::admin.alphabets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreatealphabetRequest $request
     * @return Response
     */
    public function store(CreatealphabetRequest $request)
    {
        $this->alphabet->create($request->all());

        return redirect()->route('admin.songs.alphabet.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('songs::alphabets.title.alphabets')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  alphabet $alphabet
     * @return Response
     */
    public function edit(alphabet $alphabet)
    {
        return view('songs::admin.alphabets.edit', compact('alphabet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  alphabet $alphabet
     * @param  UpdatealphabetRequest $request
     * @return Response
     */
    public function update(alphabet $alphabet, UpdatealphabetRequest $request)
    {
        $this->alphabet->update($alphabet, $request->all());

        return redirect()->route('admin.songs.alphabet.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('songs::alphabets.title.alphabets')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  alphabet $alphabet
     * @return Response
     */
    public function destroy(alphabet $alphabet)
    {
        $this->alphabet->destroy($alphabet);

        return redirect()->route('admin.songs.alphabet.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('songs::alphabets.title.alphabets')]));
    }
}
