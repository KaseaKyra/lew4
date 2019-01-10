<?php

namespace Modules\Answer\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Answer\Entities\Answer;
use Modules\Answer\Http\Requests\CreateAnswerRequest;
use Modules\Answer\Http\Requests\UpdateAnswerRequest;
use Modules\Answer\Repositories\AnswerRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Songs\Repositories\SongRepository;

class AnswerController extends AdminBaseController
{
    /**
     * @var AnswerRepository
     */
    private $answer;
    private $song;

    public function __construct(AnswerRepository $answer, SongRepository $song)
    {
        parent::__construct();

        $this->answer = $answer;
        $this->song = $song;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $answers = $this->answer->all();

        return view('answer::admin.answers.index', compact('answers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $songs = $this->song->all();
        return view('answer::admin.answers.create', compact('songs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateAnswerRequest $request
     * @return Response
     */
    public function store(CreateAnswerRequest $request)
    {
        $this->answer->create($request->all());

        return redirect()->route('admin.answer.answer.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('answer::answers.title.answers')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Answer $answer
     * @return Response
     */
    public function edit(Answer $answer)
    {
        $songs = $this->song->all();
        return view('answer::admin.answers.edit', compact('answer', 'songs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Answer $answer
     * @param  UpdateAnswerRequest $request
     * @return Response
     */
    public function update(Answer $answer, UpdateAnswerRequest $request)
    {
        $this->answer->update($answer, $request->all());

        return redirect()->route('admin.answer.answer.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('answer::answers.title.answers')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Answer $answer
     * @return Response
     */
    public function destroy(Answer $answer)
    {
        $this->answer->destroy($answer);

        return redirect()->route('admin.answer.answer.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('answer::answers.title.answers')]));
    }
}
