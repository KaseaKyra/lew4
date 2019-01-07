<?php

namespace Modules\Games\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Games\Entities\Game;
use Modules\Games\Http\Requests\CreateGameRequest;
use Modules\Games\Http\Requests\UpdateGameRequest;
use Modules\Games\Repositories\GameRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class GameController extends AdminBaseController
{
    /**
     * @var GameRepository
     */
    private $game;

    public function __construct(GameRepository $game)
    {
        parent::__construct();

        $this->game = $game;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$games = $this->game->all();

        return view('games::admin.games.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('games::admin.games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateGameRequest $request
     * @return Response
     */
    public function store(CreateGameRequest $request)
    {
        $this->game->create($request->all());

        return redirect()->route('admin.games.game.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('games::games.title.games')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Game $game
     * @return Response
     */
    public function edit(Game $game)
    {
        return view('games::admin.games.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Game $game
     * @param  UpdateGameRequest $request
     * @return Response
     */
    public function update(Game $game, UpdateGameRequest $request)
    {
        $this->game->update($game, $request->all());

        return redirect()->route('admin.games.game.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('games::games.title.games')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Game $game
     * @return Response
     */
    public function destroy(Game $game)
    {
        $this->game->destroy($game);

        return redirect()->route('admin.games.game.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('games::games.title.games')]));
    }
}
