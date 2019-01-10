<?php

namespace Modules\Songquestions\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Songquestions\Entities\Question;
use Modules\Songquestions\Http\Requests\CreateQuestionRequest;
use Modules\Songquestions\Http\Requests\UpdateQuestionRequest;
use Modules\Songquestions\Repositories\QuestionRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Songs\Repositories\SongRepository;

class QuestionController extends AdminBaseController
{
    /**
     * @var QuestionRepository
     */
    private $question;
    private $song;

    public function __construct(QuestionRepository $question, SongRepository $song)
    {
        parent::__construct();

        $this->question = $question;
        $this->song = $song;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $questions = $this->question->all();
        $songs = $this->song->all();

        return view('songquestions::admin.questions.index', compact('questions', 'songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('songquestions::admin.questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateQuestionRequest $request
     * @return Response
     */
    public function store(CreateQuestionRequest $request)
    {
        $this->question->create($request->all());

        return redirect()->route('admin.songquestions.question.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('songquestions::questions.title.questions')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Question $question
     * @return Response
     */
    public function edit(Question $question)
    {
        $songs = $this->song->all();
        return view('songquestions::admin.questions.edit', compact('question', 'songs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Question $question
     * @param  UpdateQuestionRequest $request
     * @return Response
     */
    public function update(Question $question, UpdateQuestionRequest $request)
    {
        $this->question->update($question, $request->all());

        return redirect()->route('admin.songquestions.question.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('songquestions::questions.title.questions')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Question $question
     * @return Response
     */
    public function destroy(Question $question)
    {
        $this->question->destroy($question);

        return redirect()->route('admin.songquestions.question.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('songquestions::questions.title.questions')]));
    }
}
