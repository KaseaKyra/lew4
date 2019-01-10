<?php

namespace Modules\Songs\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Songs\Entities\Song;
use Modules\Songs\Http\Requests\CreateSongRequest;
use Modules\Songs\Http\Requests\UpdateSongRequest;
use Modules\Songs\Repositories\SongRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class SongController extends AdminBaseController
{
    /**
     * @var SongRepository
     */
    private $song;

    public function __construct(SongRepository $song)
    {
        parent::__construct();

        $this->song = $song;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $songs = $this->song->all();

        return view('songs::admin.songs.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('songs::admin.songs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateSongRequest $request
     * @return Response
     */
    public function store(CreateSongRequest $request)
    {
        $this->song->create($request->all());

        return redirect()->route('admin.songs.song.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('songs::songs.title.songs')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Song $song
     * @return Response
     */
    public function edit(Song $song)
    {
//        dd($this->song->find(8)->load('answer'));
        return view('songs::admin.songs.edit', compact('song'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Song $song
     * @param  UpdateSongRequest $request
     * @return Response
     */
    public function update(Song $song, UpdateSongRequest $request)
    {
        $this->song->update($song, $request->all());

        return redirect()->route('admin.songs.song.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('songs::songs.title.songs')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Song $song
     * @return Response
     */
    public function destroy(Song $song)
    {
        $this->song->destroy($song);

        return redirect()->route('admin.songs.song.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('songs::songs.title.songs')]));
    }
}
